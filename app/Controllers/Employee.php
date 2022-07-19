<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\TaskModel;
use App\Models\VehicleModel;
use App\Models\MaintenanceModel;
use App\Models\HistoryModel;
//should a function to addCategory, addSubCategory, addItems, displayMenu
//should have a function to create analytics DECIDE WHETHER IT SHOULD BE A NEW CONTROLLER.
//know how to use base controller in a subcategory

class Employee extends BaseController
{
  private $db;

  public function __construct()
  {
      $this->db = db_connect(); // Loading database
  }

    public function index()
    {
     helper(['form']);
     $data['page_title'] = 'Dashboard';
     return view ('Employee/dashboard',$data);

 }

public function listCategory(){
  $categoryModel = new CategoryModel();
    
    $data = [
      'page_title'=> 'Categories',
'categories'=>$categoryModel->orderBy('category_id', 'ASC')->findAll(),
    ]; 
     return view ('Employee/listCategory', $data);
}

public function listsubcategory(){
   $subcategoryModel = new SubcategoryModel();
    
    $data = [
      'page_title'=> 'Subcategories',
'subcategories'=>$subcategoryModel->orderBy('subcategory_id', 'ASC')->findAll(),
    ]; 
     return view ('Employee/listSubcategory', $data);
}


public function listProducts(){
   $productModel = new ProductModel();
    
    $data = [
      'page_title'=> 'Products',
'products'=>$productModel->orderBy('product_id', 'ASC')->findAll(),
    ]; 
     return view ('Employee/listProducts', $data);
}
public function clientlogs(){
  $maintenanceModel = new MaintenanceModel();
    $data = [
	  "page_title" => 'Maintenance log',
    "maintenance" => $maintenanceModel->orderBy("m_id", 'ASC')->findAll(),
	 ];
    return view ('Employee/allMaintenance', $data);
}
public function repairDetails($id = null){
  $maintenanceModel = new MaintenanceModel();
  $taskModel = new TaskModel();
  $vehicleModel = new VehicleModel();
  $historyModel = new HistoryModel();
  $builder = $this->db->table("tbl_history as h");
  $builder->select('h.hist_id,h.m_id,h.replace_date,h.quantity,t.task_name,p.product_name');
  $builder->join('tbl_tasks as t', 'h.task_id = t.task_id'); 
  $builder->join('tbl_product as p', 'h.product_id = p.product_id'); 
  $builder->where('m_id', $id);
  $info = $builder->get();

  $data = [
	  "page_title" => 'Maintenance log',
    "maintenance" => $maintenanceModel->where("m_id", $id)->first(),
    "log" => $info,
	 ];
   $session = session();
   $sessionData = [
     'm_id' => $data[ 'maintenance' ],
     'maintenance' => true
 ];
    return view ('Employee/repairDetails', $data);
}
public function newRepair($id = null){

  date_default_timezone_set( 'Africa/Nairobi' );
  $Date = date( 'Y-m-d' );
  $maintenanceModel = new MaintenanceModel();
  $taskModel = new TaskModel();
  $productModel = new ProductModel();
  $historyModel = new HistoryModel();
  
  $data = [
    'tasks'=>$taskModel->orderBy('task_id', 'ASC')->findAll(),
    'products'=>$productModel->orderBy('product_id', 'ASC')->findAll(),
	  "page_title" => 'Create log',
    'maintain' => [$maintenanceModel->where("m_id", $id)->first()],
	 ];
   if ($this->request->getMethod() == 'post'){
    $maintain2 = $maintenanceModel->where("m_id", $id)->first();
   $repairData=[
    "m_id"=>$maintain2['m_id'],
    "task_id" => $this->request->getVar("task_id"),
    "product_id" =>$this->request->getVar("product_id"),
    "quantity" => $this->request->getVar("quantity"),
    "replace_date" => $Date,
   ];
   if ($historyModel->save($repairData))
        $session = session();
        $session->setFlashdata("success", "Repair Detail created successfully");
        return redirect()->to(base_url('clients-logs'));
      
    }
    return view ('Employee/newRepairLog', $data);
}
public function editRepair($id = null){

  date_default_timezone_set( 'Africa/Nairobi' );
  $Date = date( 'Y-m-d' );
  $maintenanceModel = new MaintenanceModel();
  $taskModel = new TaskModel();
  $productModel = new ProductModel();
  $historyModel = new HistoryModel();
  
  $data = [
    'tasks'=>$taskModel->orderBy('task_id', 'ASC')->findAll(),
    'products'=>$productModel->orderBy('product_id', 'ASC')->findAll(),
	  "page_title" => 'Edit Log',
    'repair' => $historyModel->where("hist_id", $id)->first()
	 ];
   if ($this->request->getMethod() == 'post'){
   $repairData=[
    "task_id" => $this->request->getVar("task_id"),
    "product_id" =>$this->request->getVar("product_id"),
    "quantity" => $this->request->getVar("quantity"),
   ];
   if ($historyModel->update($id,$repairData))
        $session = session();
        $session->setFlashdata("success", "Repair Detail Edit successfully");
        return redirect()->to(base_url('clients-logs'));
      
    }
    return view ('Employee/editRepairLog', $data);
}
public function newMaintenance(){

  date_default_timezone_set( 'Africa/Nairobi' );
  $Date = date( 'Y-m-d' );
  $maintenanceModel = new MaintenanceModel();
  $vehicleModel = new VehicleModel();
  $data = [
	  "page_title" => 'New Maintenance',
    "vehicle" => $vehicleModel->orderBy('v_id', 'ASC')->findAll(), 
    ];
    $v_plate= $this->request->getVar("v_plate");
    $v_id = $vehicleModel->where('v_plate', $v_plate)->first();
    if ($this->request->getMethod() == 'post'){
      $maintenanceData = [
        'v_id'=> $v_id['v_id'],
        'v_plate'=> $v_plate,
        'mileage'=> $this->request->getVar("mileage"),
        'date' => $Date
      ];
      if ($maintenanceModel->save($maintenanceData))
        $session = session();
        $session->setFlashdata("success", "Maintenance Recorded successfully");
        return redirect()->to(base_url('clients-logs'));
    }
    return view ('Employee/newMaintenance', $data);
}
public function editMaintenance($id = null){

  date_default_timezone_set( 'Africa/Nairobi' );
  $Date = date( 'Y-m-d' );
  $maintenanceModel = new MaintenanceModel();
  $vehicleModel = new VehicleModel();
  $data = [
	  "page_title" => 'New Maintenance',
    "maintenance" => $maintenanceModel->where('m_id', $id)->first(),
    "vehicle" => $vehicleModel->orderBy('V_id', 'ASC')->findAll(), 
    ];
    $v_plate= $this->request->getVar("v_plate");
    $v_id = $vehicleModel->where('v_plate', $v_plate)->first();
    $m_id = $maintenanceModel->where('m_id', $id)->first();
    $id = $m_id['m_id'];
    if ($this->request->getMethod() == 'post'){
      $maintenanceData = [
        'v_id'=> $v_id['v_id'],
        'v_plate'=> $v_plate,
        'mileage'=> $this->request->getVar("mileage"),
        'date' => $Date
      ];
      if ($maintenanceModel->update($id,$maintenanceData))
        $session = session();
        $session->setFlashdata("success", "Maintenance Recorded successfully");
        return redirect()->to(base_url('clients-logs'));
    }
    return view ('Employee/editMaintenance', $data);
}
}
?>
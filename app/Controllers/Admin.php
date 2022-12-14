<?php

namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\ProductImageModel;
use App\Models\UserModel;
use App\Models\LoginModel;
use App\Models\TaskModel;
use App\Models\VehicleModel;
use App\Models\MaintenanceModel;
use App\Models\HistoryModel;
class Admin extends BaseController
{
    public function index()
    {
        return view('Admin/Dashboard.php');
    }
	private $db;

  public function __construct()
  {
      $this->db = db_connect(); // Loading database
  }


    public function listOrders()
    {
        return view('Admin/List-orders.php');
    }
    public function ordersDetails()
    {
        return view('Admin/Order-details.php');
    }
   
            /* USER'S CRUD */
    public function addUser(){
		$data['page_title'] = 'Create User';
		helper(["url"]);
		$userModel = new UserModel();
		$data = [
'roles'=>$userModel->groupBy('role', 'ASC')->findAll(),
'page_title' =>'Create User',
		];
		if ($this->request->getMethod() == 'post'){
			$registrationRules=[
				'first_name'=>'required',
				'last_name'=>'required',
				'email' =>'required|valid_email|is_unique[tbl_users.email]',
				'password'=>'required|min_length[8]',
				'gender'=>'required',
				'role'=>'required'
			];
				$registrationErrors =['email'  => ['is_unique' => 'Sorry. That email has already been taken. Please choose another.'],];

				if (!$this->validate($registrationRules,$registrationErrors)){
					return view('Admin/createUser', [
						"validation" => $this->validator,
					]);
				}else{
					$session = session();
					$registrationData = [
						"first_name" => $this->request->getVar("first_name"),
						"last_name" => $this->request->getVar("last_name"),
						"email" => $this->request->getVar("email"),
						"password" => Hash::make($this->request->getVar("password")),
						"gender" => $this->request->getVar("gender"),
						"role" => $this->request->getVar("role"),
					];
					if($userModel->insert($registrationData)){
						$session->setFlashdata("success", "User created successfully");
					}else{
						return view('Admin/createUser', ['errors' => $userModel->errors()]);
					}
					return redirect()->to(base_url('list-Users'));
				}
			}
			return view('Admin/createUser',$data);
		}

public function listUsers(){
 $userModel = new UserModel();
    $data = [
      'page_title'=> 'Users',
'users'=>$userModel->orderBy('user_id', 'ASC')->findAll(),
    ]; 
     return view ('Admin/Users-list.php', $data);
}



		public function editUser($id = null){
	
		helper(["url"]);
		  $userModel = new UserModel();
		  $data = [
		  	'page_title' => 'Edit User',
		  	'roles'=>$userModel->groupBy('role', 'ASC')->findAll(),
		  	'users' => $userModel->where("user_id", $id)->first(),
		  ];

		if ($this->request->getMethod() == 'post'){
			$registrationRules=[
				'first_name'=>'required',
				'last_name'=>'required',
				'email' =>'required|valid_email',
				'password'=>'required|min_length[8]',
				'gender'=>'required'];
				

				if (!$this->validate($registrationRules)){
					return view('auth/register', [
						"validation" => $this->validator,
					]);
				}else{
					$session = session();
					$userModel = new UserModel();
					$registrationData = [
						"first_name" => $this->request->getVar("first_name"),
						"last_name" => $this->request->getVar("last_name"),
						"email" => $this->request->getVar("email"),
						"password" => Hash::make($this->request->getVar("password")),
						"gender" => $this->request->getVar("gender"),
						"role" => $this->request->getVar("role"),
					];
					if($userModel->update($id, $registrationData)){
						$session->setFlashdata("success", "User updated successfully");
						return redirect()->to(base_url('list-Users'));
					}else{
						return view('Admin/editUser', ['errors' => $userModel->errors()]);
					}	
				}
			}
			return view('Admin/editUser',$data);
		}
		
		public function deleteUser($id= null){
			$userModel = new UserModel();
   $user = $userModel->delete($id);

        $session = session();
        $session->setFlashdata("success", "User deleted successfully");

        return redirect()->to(base_url('list-Users'));
		}
/** PRODUCT CRUD */
/**CATEGORY CRUD */
public function addCategory()
{
	$data['page_title'] = 'Add category';
	helper(["url"]);
	if ($this->request->getMethod() == 'post'){
		 $rules = [
			   "category_name" => "required|min_length[3]|max_length[25]",
		   ];
		   if (!$this->validate($rules)) {
			 return view('add-category', [
				   "validation" => $this->validator,
				   
			   ]);
		   }else{
	   $categoryData =[
		   "category_name" => $this->request->getVar("category_name"),
	   ];

		$categoryModel = new CategoryModel();
	   $session = session();
		$categoryModel->save($categoryData);

			   $session = session();
			   $session->setFlashdata("success", "Category created successfully");
			   return redirect()->to(base_url('list-category'));
	 }
   }
   return view ('Admin/categoryForm',$data);

}

public function listCategory(){
	$categoryModel = new CategoryModel();
	  
	  $data = [
		'page_title'=> 'Categories',
  'categories'=>$categoryModel->orderBy('category_id', 'ASC')->findAll(),
	  ]; 
	   return view ('Employee/listCategory', $data);
  }

public function editCategory($id = null)
{
	 helper(["url"]);
	 $data['page_title'] = 'Edit Category';

   $categoryModel = new CategoryModel();
   $data['category'] = $categoryModel->where("category_id", $id)->first();

	if ($this->request->getMethod() == 'post'){
	   
		$rules = [
			   "category_name" => "required|min_length[3]|max_length[25]",
		   ];
		   if (!$this->validate($rules)) {
			 return view('Admin/editCategory', [
				   "validation" => $this->validator,
				   "category" => $data,
			   ]);
		   }
	 else{
	   $categoryData =[
		   "category_name" => $this->request->getVar("category_name"),
	   ];
	   $categoryModel->update($id, $categoryData);

		  $session = session();
			   $session->setFlashdata("success", "Category updated successfully");
			   return redirect()->to(base_url('list-category'));
   }}
   return view ('Admin/editCategory', $data);

}

public function deleteCategory($id = null){
$categoryModel = new CategoryModel();
  $category = $categoryModel->delete($id);

	   $session = session();
	   $session->setFlashdata("success", "Category deleted successfully");

	   return redirect()->to(base_url('list-category'));
}


//Start product CRUD
public function addProduct()
{       
   helper(["url","html"]);
   $data['page_title'] = 'Product Form';

    $categoryModel = new CategoryModel();
    $data['categories'] = $categoryModel->groupBy('category_name', 'ASC')->findAll();

   if ($this->request->getMethod() == 'post'){

    $file_validate =$this->validate ([
        "product_image"=>[
            'uploaded[product_image]',
            'max_size[product_image,4096]',
            'mime_in[product_image,image/jpg,image/jpeg,image/gif,image/png]',]
        ]);
    

    $session = session();

// moves image to a particular folder
    if ($file_validate){
        $productModel = new ProductModel();
        $file = $this->request->getFile("product_image");
        if ($file->isValid() && ! $file->hasMoved()) {
          $name = $file->getName();
     $file->move( 'assets/productImages/', $name);
}
         $name = $this->request->getVar('name');
        $productData = [
            "product_name" => $this->request->getVar("product_name"),
            "product_description" => $this->request->getVar("product_description"),
            "product_image" => $file->getName(),
            "unit_price" => $this->request->getVar("unit_price"),
            "category_id" => $this->request->getVar("category_id"),
             "available_quantity" => $this->request->getVar("available_quantity")
        ];
        
        if($productModel->insert($productData) === false){
 return view('/Admin/itemForm', [
                'errors' => $productModel->errors()
            ]);
            
        }else{

           $session->setFlashdata("success", "Product saved successfully");
            return redirect()->to(base_url('list-products'));
 //inserting data into productimages tbl
            $product_id = $productModel->getInsertID();

            $imageData = [
                "product_image" => $img->getName(),
                "product_id"=> $product_id
            ];
            $productimageModel = new ProductImageModel;
            $productimageModel->insert($imageData);
        }
    }else {
        $session->setFlashdata("error", "Choose a valid file");
    }


}
return view ('Admin/itemForm',$data);
}

public function listProducts(){
	$productModel = new ProductModel();
	 
	 $data = [
	   'page_title'=> 'Products',
 'products'=>$productModel->orderBy('product_id', 'ASC')->findAll(),
	 ]; 
	  return view ('Admin/listProducts', $data);
 }

public function editProduct($id = null){
	$categoryModel = new CategoryModel();
	 $productModel = new ProductModel();
	 $data = [
	  "page_title" => "Edit Products",
	  "categories" => $categoryModel->orderBy('category_name', 'ASC')->findAll(),
	  "products" => $productModel->where("product_id", $id)->first(),
	 ]; 
  $products2 = $productModel->where("product_id", $id)->first();

  if ($this->request->getMethod() == 'post'){

  $file_validate =$this->validate ([
	  "product_image"=>[
		  'uploaded[product_image]',
		  'max_size[product_image,4096]',
		  'mime_in[product_image,image/jpg,image/jpeg,image/gif,image/png]',]
	  ]);
// moves image to a particular folder
  if ($file_validate){
	  $productModel = new ProductModel();
	  $file = $this->request->getFile("product_image");
	  if ($file->isValid() && ! $file->hasMoved()) {
		$oldImage = $products2['product_image'];
	 if (file_exists("uploads/".$oldImage)) {
	   unlink("uploads/".$oldImage);
	 }
	  $name = $file->getName();
   $file->move( 'assets/productImages/', $name);

}
	   $name = $this->request->getVar('name');
	  $productData = [
		  "product_name" => $this->request->getVar("product_name"),
		  "product_description" => $this->request->getVar("product_description"),
		  "product_image" => $file->getName(),
		  "unit_price" => $this->request->getVar("unit_price"),
		  "category_id" => $this->request->getVar("category_id"),
		   "available_quantity" => $this->request->getVar("available_quantity")
	  ];
	  
	  if($productModel->update($id, $productData) === false){
return view('Admin/editProduct', [
			  'errors' => $productModel->errors()
		  ]);
		  
	  }else{
		 $session = session();
			  $session->setFlashdata("success", "Product updated successfully");
			  return redirect()->to(base_url('list-products'));
//inserting data into productimages tbl
		  $product_id = $productModel->getInsertID();

		  $imageData = [
			  "product_image" => $img->getName(),
			  "product_id"=> $product_id
		  ];
		  $productimageModel = new ProductImageModel;
		  $productimageModel->insert($imageData);
	  }
  }else {
	  $session->setFlashdata("error", "Choose a valid file");
  }


}

	  return view ('Admin/editProduct', $data);
}

public function deleteProduct($id = null)
{
$productModel = new ProductModel();
 $product = $productModel->delete($id);

	  $session = session();
	  $session->setFlashdata("success", "Product deleted successfully");

	  return redirect()->to(base_url('list-products'));
}
//End products CRUD


//MAINTENANCE FUNCTIONS
public function clientlogs(){
	
	$maintenanceModel = new MaintenanceModel();
	
	  $data = [
		"page_title" => 'Maintenance log',
	  "maintenance" => $maintenanceModel->orderBy("m_id", 'ASC')->findAll(),
		   ];
	  return view ('Admin/allMaintenance', $data);
  }
  public function repairDetails($id = null){
	$maintenanceModel = new MaintenanceModel();
	$taskModel = new TaskModel();
	$vehicleModel = new VehicleModel();
	$historyModel = new HistoryModel();
	$builder = $this->db->table("tbl_history as h");
	$builder->select('h.hist_id,h.m_id,h.replace_date,h.quantity,t.task_name,p.product_name, h.maintenance_date');
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
	  return view ('Admin/repairDetails', $data);
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
	  return view ('Admin/newRepairLog', $data);
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
	  return view ('Admin/editRepairLog', $data);
  }
  public function deleteRepair($id = null){
	$historyModel = new HistoryModel();
  $history = $historymodel->delete($id);

	   $session = session();
	   $session->setFlashdata("success", "Deleted successfully");

	   return redirect()->to(base_url('admin-clients-logs'));
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
	  return view ('Admin/newMaintenance', $data);
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
	  return view ('Admin/editMaintenance', $data);
  }
  public function deleteMaintenance($id = null){
	$maintenanceModel = new MaintenanceModel();
  $maintenance = $maintenanceModel->delete($id);

	   $session = session();
	   $session->setFlashdata("success", "log deleted successfully");

	   return redirect()->to(base_url('admin-clients-logs'));
  }
}




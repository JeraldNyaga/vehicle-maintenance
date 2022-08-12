<?php

namespace App\Controllers;
use App\Models\VehicleModel;
use App\Models\MaintenanceModel;
use App\Models\HistoryModel;
use App\Models\ContactModel;

class Client extends BaseController
{
    private $db;

    public function index()
    {
        $data['page_title'] = 'Home';
        return view('Client/home.php',$data);
    }
    
  public function __construct()
  {
      $this->db = db_connect(); // Loading database
  }

    public function contact()
    {
        $data['page_title'] = 'Contact Us';
        if ($this->request->getMethod() == 'post' ) {
            $messageRules = [
                'name'=>'required',
                'email'=>'required|valid_email',
                'phone' =>'min_length[9]',
                'message'=>'required', 
            ];
                if (!$this->validate($messageRules) ) {
                    return view( 'Client/Contact.php', [
                        'validation' => $this->validator,
                    ] );
                } else {
                    $session = session();
                    $contactModel = new ContactModel();
                    
                    $messageData = [
                        'name' => $this->request->getVar( 'name' ),
                        'email' => $this->request->getVar( 'email' ),
                        'phone' => $this->request->getVar( 'phone' ) ,
                        'message' =>  $this->request->getVar('message'),
                    ];
                    if ($contactModel->insert( $messageData ) ) {
                        $session->setFlashdata( 'success', 'Message sent successfully!' );
                        return redirect()->to( base_url( 'client-home' ) );
                    } else {
                        return view( 'Client/Contact.php', [ 'errors' => $contactModel->errors() ] );
                    }
                    return redirect()->to( base_url( 'contact-us' ) );
                }
            }
        return view('Client/Contact.php',$data);
    }

    public function appointment()
    {
        $data['page_title'] = 'Book Appointment';
        return view('Client/appointment.php',$data);
    }
//MAINTENANCE FUNCTIONS
public function clientlogs($id = null){
    $maintenanceModel = new MaintenanceModel();
	$vehicleModel = new VehicleModel();

    $id = session()->get( 'user_id' );
    $builder = $this->db->table("tbl_maintenance as m");
	$builder->select('m.v_id, m.v_plate, m.date, m.mileage,m.m_id');
	$builder->join('tbl_vehicle as v', 'v.v_id = m.v_id'); 
	$builder->where('v.user_id', $id);
	$info = $builder->get();
	
	  $data = [
		"page_title" => 'Vehicle Maintenance log',
        "log" =>$info,
		   ];
	  return view ('Client/allMaintenance', $data);
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

    
}

<?php

namespace App\Controllers;
use App\Models\UserModel;

class Profile extends BaseController
 {
    private $db;

    public function __construct()
    {
        $this->db = db_connect(); // Loading database
    }
    public function index($id=null)
    {
        $id = session()->get( 'user_id' );
        $usermodel = new UserModel();
        $builder = $this->db->table("tbl_users as u");
        $builder->select('u.first_name, u.last_name, r.role_name, u.email');
        $builder->join('tbl_roles as r',' r.role_id = u.role');
        $builder->where('user_id', $id);
        $info = $builder->get();

$data = [
    'page_title' => 'Profile',
    'profile' => $info,
];
        return view( 'Profile', $data );
    }
    public function clientProfile($id = null)
 {
       $id = session()->get( 'user_id' );
        $data[ 'page_title' ] = 'Profile';
        return view( 'Client/Profile', $data );
    }

    public function adminProfile($id = null)
 {
       $id = session()->get( 'user_id' );
        return view( 'Admin/Profile' );
    }
    public function employeeProfile($id = null)
    {
       $id = session()->get( 'user_id' );
           return view( 'Employee/Profile' );
       }

}

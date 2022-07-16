<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
   protected $table = 'tbl_userlogins';
   protected $primaryKey = 'userlogin_id';
   protected $allowedFields = ['user_id','login_time','logout_time'];
 
 /* public function updateLogin(array $loginData[], int $id){
 
        $this->db->where('id', $id);
        $this->db->update($this->$table, $loginData);
    
  }*/
    

}
?>
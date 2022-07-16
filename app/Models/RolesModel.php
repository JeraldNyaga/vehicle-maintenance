<?php

namespace App\Models;

use CodeIgniter\Model;

class RolesModel extends Model
{
   protected $table = 'tbl_roles';
   protected $primaryKey = 'role_id';
     protected $useAutoIncrement	= true;
   protected $allowedFields = ['role_name'];
}
?>
<?php

namespace App\Models;

use CodeIgniter\Model;

class MaintenanceModel extends Model
{
   protected $table = 'tbl_maintenance';
   protected $primaryKey = 'm_id';
   protected $allowedFields = ['v_id','v_plate','mileage','date'];
}
?>
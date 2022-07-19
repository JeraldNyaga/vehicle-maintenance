<?php

namespace App\Models;

use CodeIgniter\Model;

class VehicleModel extends Model
{
   protected $table = 'tbl_vehicle';
   protected $primaryKey = 'v_id';
   protected $allowedFields = ['v_plate','v_make','v_model','v_chassis','user_id'];
}
?>
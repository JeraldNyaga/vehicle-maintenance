<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
   protected $table = 'tbl_tasks';
   protected $primaryKey = 'task_id';
   protected $allowedFields = ['task_name','miles_btwn_service','months_btwn_service'];
}
?>
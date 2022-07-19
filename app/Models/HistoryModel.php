<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryModel extends Model
{
   protected $table = 'tbl_history';
   protected $primaryKey = 'hist_id';
   protected $allowedFields = ['m_id','task_id','product_id','quantity','replace_date'];
}
?>
<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table         = 'tbl_product';
    protected $primaryKey	 ='product_id';
    protected $useAutoIncrement	= true;
    protected $useSoftDeletes = false;
    protected $allowedFields = ['product_name', 'product_description', 'product_image',"unit_price","available_quantity","created_at"];
   


    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    
    
}
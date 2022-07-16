<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductImageModel extends Model
{
    protected $table         = 'tbl_productimages';
    protected $primaryKey	 ='productimages_id';
    protected $useAutoIncrement	= true;
    protected $useSoftDeletes = true;
    protected $allowedFields = ['product_image', 'product_id',"created_at", "updated_at"];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
   protected $table = 'tbl_categories';
   protected $primaryKey = 'category_id';
   protected $allowedFields = ['category_name'];

   protected $validationRules = [
 "category_name"=>"required"
];

protected $validationMessages =[
"category_name"=>"Enter the category name"
];
   protected $useSoftDelete        = true;


}
?>
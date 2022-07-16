<?php

namespace App\Models;

use CodeIgniter\Model;

class SubcategoryModel extends Model
{
   protected $table = 'tbl_subcategories';
   protected $primaryKey = 'subcategory_id';
   protected $allowedFields = ['subcategory_name', 'category'];

   protected $validationRules = [
 "subcategory_name"=>"required",
 "category"=>"required"
];

protected $validationMessages =[
"subcategory_name"=>"Enter a subcategory name",
"category"=>"Select a category name"
];
   protected $useSoftDelete        = true;
}
?>
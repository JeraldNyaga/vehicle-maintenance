<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategoryModel;
use App\Models\SubcategoryModel;
use App\Models\ProductModel;
use App\Models\ProductImageModel;
use App\Models\UserModel;
use App\Models\LoginModel;
//should a function to addCategory, addSubCategory, addItems, displayMenu
//should have a function to create analytics DECIDE WHETHER IT SHOULD BE A NEW CONTROLLER.
//know how to use base controller in a subcategory

class Employee extends BaseController
{
    public function index()
    {
     helper(['form']);
     $data['page_title'] = 'Dashboard';
     return view ('Employee/dashboard',$data);

 }

public function listCategory(){
  $categoryModel = new CategoryModel();
    
    $data = [
      'page_title'=> 'Categories',
'categories'=>$categoryModel->orderBy('category_id', 'ASC')->findAll(),
    ]; 
     return view ('Employee/listCategory', $data);
}

public function listsubcategory(){
   $subcategoryModel = new SubcategoryModel();
    
    $data = [
      'page_title'=> 'Subcategories',
'subcategories'=>$subcategoryModel->orderBy('subcategory_id', 'ASC')->findAll(),
    ]; 
     return view ('Employee/listSubcategory', $data);
}


public function listProducts(){
   $productModel = new ProductModel();
    
    $data = [
      'page_title'=> 'Products',
'products'=>$productModel->orderBy('product_id', 'ASC')->findAll(),
    ]; 
     return view ('/Employee/listProducts', $data);
}


}
?>
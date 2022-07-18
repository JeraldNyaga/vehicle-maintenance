<?php

namespace App\Controllers\Admin;
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

class Product extends BaseController
{
    public function index()
    {
     helper(['form']);



 }

//Start category CRUD

 public function addCategory()
 {
     $data['page_title'] = 'Add category';
     helper(["url"]);
     if ($this->request->getMethod() == 'post'){
          $rules = [
                "category_name" => "required|min_length[3]|max_length[25]",
            ];
            if (!$this->validate($rules)) {
              return view('add-category', [
                    "validation" => $this->validator,
                    
                ]);
            }else{
        $categoryData =[
            "category_name" => $this->request->getVar("category_name"),
        ];

         $categoryModel = new CategoryModel();
        $session = session();
         $categoryModel->save($categoryData);

                $session = session();
                $session->setFlashdata("success", "Category created successfully");
                return redirect()->to(base_url('list-category'));
      }
    }
    return view ('Admin/categoryForm',$data);

}

public function listCategory(){
  $categoryModel = new CategoryModel();
    
    $data = [
      'page_title'=> 'Categories',
'categories'=>$categoryModel->orderBy('category_id', 'ASC')->findAll(),
    ]; 
     return view ('/Admin/listCategory', $data);
}


 public function editCategory($id = null)
 {
      helper(["url"]);
      $data['page_title'] = 'Edit Category';

    $categoryModel = new CategoryModel();
    $data['category'] = $categoryModel->where("category_id", $id)->first();

     if ($this->request->getMethod() == 'post'){
        
         $rules = [
                "category_name" => "required|min_length[3]|max_length[25]",
            ];
            if (!$this->validate($rules)) {
              return view('Admin/editCategory', [
                    "validation" => $this->validator,
                    "category" => $data,
                ]);
            }
      else{
        $categoryData =[
            "category_name" => $this->request->getVar("category_name"),
        ];
        $categoryModel->update($id, $categoryData);

           $session = session();
                $session->setFlashdata("success", "Category updated successfully");
                return redirect()->to(base_url('list-category'));
    }}
    return view ('Admin/editCategory', $data);

}

public function deleteCategory($id = null){
 $categoryModel = new CategoryModel();
   $category = $categoryModel->delete($id);

        $session = session();
        $session->setFlashdata("success", "Category deleted successfully");

        return redirect()->to(base_url('list-category'));
}

//End category CRUD



//Start subcategory CRUD
public function addSubCategory()
{
   $data['page_title'] = 'Subcategory Form';

   helper(["url"]);

         //Getting Category_ID from tbl_categories
    // Category model 
    $categoryModel = new CategoryModel();
    $data['categories'] = $categoryModel->orderBy('category_name', 'ASC')->findAll();  
    

   if ($this->request->getMethod() == 'post'){
    
     $rules = [
                "subcategory_name" => "required|min_length[3]|max_length[25]",
                "category" => "required",
            ];
            if (!$this->validate($rules)) {
              return view('add-subcategory', [
                    "validation" => $this->validator,
                ]);
            }
      else{
      $subcategoryData =[
        "subcategory_name" => $this->request->getVar("subcategory_name"),
        "category" => $this->request->getVar("category"),
    ];

        $subcategoryModel = new SubcategoryModel();
        $session = session();
        $subcategoryModel->insert($subcategoryData);

           $session = session();
                $session->setFlashdata("success", "Subcategory created successfully");
                return redirect()->to(base_url('list-subcategory'));
    }
   
}
return view ('/Admin/subcategoryForm', $data);
}

public function listsubcategory(){
   $subcategoryModel = new SubcategoryModel();
    
    $data = [
      'page_title'=> 'Subcategories',
'subcategories'=>$subcategoryModel->orderBy('subcategory_id', 'ASC')->findAll(),
    ]; 
     return view ('/Admin/listSubcategory', $data);
}


 public function editsubcategory($id = null)
 {
      helper(["url"]);
      $data['page_title'] = 'Edit Subcategory';

      $categoryModel = new CategoryModel();
    $data['categories'] = $categoryModel->orderBy('category_name', 'ASC')->findAll();  
    /* return view ('/Admin/editSubcategory', $data);*/

     $subcategoryModel = new SubcategoryModel();
    $data['subcategory'] = $subcategoryModel->where("subcategory_id", $id)->first();

     if ($this->request->getMethod() == 'post'){
        
          $rules = [
                "subcategory_name" => "required|min_length[3]|max_length[25]",
                "category" => "required",
            ];
            if (!$this->validate($rules)) {
              return view('Admin/editsubcategory', [
                    "validation" => $this->validator,
                    "subcategory" => $data,
                ]);
            }
      else{
         $subcategoryData =[
        "subcategory_name" => $this->request->getVar("subcategory_name"),
        "category" => $this->request->getVar("category"),
    ];
        $subcategoryModel->update($id, $subcategoryData);

           $session = session();
                $session->setFlashdata("success", "Subcategory updated successfully");
                return redirect()->to(base_url('list-subcategory'));
    }}
    return view ('Admin/editSubcategory', $data);

}

public function deleteSubcategory($id = null){
  $subcategoryModel = new SubcategoryModel();
   $subcategory = $subcategoryModel->delete($id);

        $session = session();
        $session->setFlashdata("success", "Subcategory deleted successfully");

        return redirect()->to(base_url('list-subcategory'));
}
//End subcategory CRUD



//Start product CRUD
public function addProduct()
{       
   helper(["url","html"]);
   $data['page_title'] = 'Product Form';

    $subcategoryModel = new SubcategoryModel();
    $data['subcategories'] = $subcategoryModel->groupBy('subcategory_name', 'ASC')->findAll();

   if ($this->request->getMethod() == 'post'){

    $file_validate =$this->validate ([
        "product_image"=>[
            'uploaded[product_image]',
            'max_size[product_image,4096]',
            'mime_in[product_image,image/jpg,image/jpeg,image/gif,image/png]',]
        ]);
    

    $session = session();

// moves image to a particular folder
    if ($file_validate){
        $productModel = new ProductModel();
        $file = $this->request->getFile("product_image");
        if ($file->isValid() && ! $file->hasMoved()) {
          $name = $file->getName();
     $file->move( 'assets/productImages/', $name);
}
         $name = $this->request->getVar('name');
        $productData = [
            "product_name" => $this->request->getVar("product_name"),
            "product_description" => $this->request->getVar("product_description"),
            "product_image" => $file->getName(),
            "unit_price" => $this->request->getVar("unit_price"),
            "subcategory_id" => $this->request->getVar("subcategory_id"),
             "available_quantity" => $this->request->getVar("available_quantity")
        ];
        
        if($productModel->insert($productData) === false){
 return view('/Admin/itemForm', [
                'errors' => $productModel->errors()
            ]);
            
        }else{

           $session->setFlashdata("success", "Product saved successfully");
            return redirect()->to(base_url('list-products'));
 //inserting data into productimages tbl
            $product_id = $productModel->getInsertID();

            $imageData = [
                "product_image" => $img->getName(),
                "product_id"=> $product_id
            ];
            $productimageModel = new ProductImageModel;
            $productimageModel->insert($imageData);
        }
    }else {
        $session->setFlashdata("error", "Choose a valid file");
    }


}
return view ('/Admin/itemForm',$data);
}

public function listProducts(){
   $productModel = new ProductModel();
    
    $data = [
      'page_title'=> 'Products',
'products'=>$productModel->orderBy('product_id', 'ASC')->findAll(),
    ]; 
     return view ('/Admin/listProducts', $data);
}

public function editProduct($id = null){
      $subcategoryModel = new SubcategoryModel();
       $productModel = new ProductModel();
       $data = [
        "page_title" => "Edit Products",
        "subcategories" => $subcategoryModel->orderBy('subcategory_name', 'ASC')->findAll(),
        "products" => $productModel->where("product_id", $id)->first(),
       ];
    /*$data['subcategories'] = $subcategoryModel->orderBy('subcategory_name', 'ASC')->findAll(); */ 
    $products2 = $productModel->where("product_id", $id)->first();

    if ($this->request->getMethod() == 'post'){

    $file_validate =$this->validate ([
        "product_image"=>[
            'uploaded[product_image]',
            'max_size[product_image,4096]',
            'mime_in[product_image,image/jpg,image/jpeg,image/gif,image/png]',]
        ]);
// moves image to a particular folder
    if ($file_validate){
        $productModel = new ProductModel();
        $file = $this->request->getFile("product_image");
        if ($file->isValid() && ! $file->hasMoved()) {
          $oldImage = $products2['product_image'];
       if (file_exists("uploads/".$oldImage)) {
         unlink("uploads/".$oldImage);
       }
        $name = $file->getName();
     $file->move( 'uploads/', $name);

}
         $name = $this->request->getVar('name');
        $productData = [
            "product_name" => $this->request->getVar("product_name"),
            "product_description" => $this->request->getVar("product_description"),
            "product_image" => $file->getName(),
            "unit_price" => $this->request->getVar("unit_price"),
            "subcategory_id" => $this->request->getVar("subcategory_id"),
             "available_quantity" => $this->request->getVar("available_quantity")
        ];
        
        if($productModel->update($id, $productData) === false){
 return view('/Admin/editProduct', [
                'errors' => $productModel->errors()
            ]);
            
        }else{
           $session = session();
                $session->setFlashdata("success", "Product updated successfully");
                return redirect()->to(base_url('list-products'));
 //inserting data into productimages tbl
            $product_id = $productModel->getInsertID();

            $imageData = [
                "product_image" => $img->getName(),
                "product_id"=> $product_id
            ];
            $productimageModel = new ProductImageModel;
            $productimageModel->insert($imageData);
        }
    }else {
        $session->setFlashdata("error", "Choose a valid file");
    }


}

        return view ('/Admin/editProduct', $data);
}

public function deleteProduct($id = null){
  $productModel = new ProductModel();
   $product = $productModel->delete($id);

        $session = session();
        $session->setFlashdata("success", "Product deleted successfully");

        return redirect()->to(base_url('list-products'));
}
//End products CRUD

}
?>
<?php

namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\ProductImageModel;
use App\Models\UserModel;
use App\Models\LoginModel;
class Admin extends BaseController
{
    public function index()
    {
        return view('Admin/Dashboard.php');
    }
	

    public function listOrders()
    {
        return view('Admin/List-orders.php');
    }
    public function ordersDetails()
    {
        return view('Admin/Order-details.php');
    }
   
            /* USER'S CRUD */
    public function addUser(){
		$data['page_title'] = 'Create User';
		helper(["url"]);
		$userModel = new UserModel();
		$data = [
'roles'=>$userModel->groupBy('role', 'ASC')->findAll(),
'page_title' =>'Create User',
		];
		if ($this->request->getMethod() == 'post'){
			$registrationRules=[
				'first_name'=>'required',
				'last_name'=>'required',
				'email' =>'required|valid_email|is_unique[tbl_users.email]',
				'password'=>'required|min_length[8]',
				'gender'=>'required',
				'role'=>'required'
			];
				$registrationErrors =['email'  => ['is_unique' => 'Sorry. That email has already been taken. Please choose another.'],];

				if (!$this->validate($registrationRules,$registrationErrors)){
					return view('Admin/createUser', [
						"validation" => $this->validator,
					]);
				}else{
					$session = session();
					$registrationData = [
						"first_name" => $this->request->getVar("first_name"),
						"last_name" => $this->request->getVar("last_name"),
						"email" => $this->request->getVar("email"),
						"password" => Hash::make($this->request->getVar("password")),
						"gender" => $this->request->getVar("gender"),
						"role" => $this->request->getVar("role"),
					];
					if($userModel->insert($registrationData)){
						$session->setFlashdata("success", "User created successfully");
					}else{
						return view('Admin/createUser', ['errors' => $userModel->errors()]);
					}
					return redirect()->to(base_url('list-Users'));
				}
			}
			return view('Admin/createUser',$data);
		}

public function listUsers(){
 $userModel = new UserModel();
    $data = [
      'page_title'=> 'Users',
'users'=>$userModel->orderBy('user_id', 'ASC')->findAll(),
    ]; 
     return view ('Admin/Users-list.php', $data);
}



		public function editUser($id = null){
	
		helper(["url"]);
		  $userModel = new UserModel();
		  $data = [
		  	'page_title' => 'Edit User',
		  	'roles'=>$userModel->groupBy('role', 'ASC')->findAll(),
		  	'users' => $userModel->where("user_id", $id)->first(),
		  ];

		if ($this->request->getMethod() == 'post'){
			$registrationRules=[
				'first_name'=>'required',
				'last_name'=>'required',
				'email' =>'required|valid_email',
				'password'=>'required|min_length[8]',
				'gender'=>'required'];
				

				if (!$this->validate($registrationRules)){
					return view('auth/register', [
						"validation" => $this->validator,
					]);
				}else{
					$session = session();
					$userModel = new UserModel();
					$registrationData = [
						"first_name" => $this->request->getVar("first_name"),
						"last_name" => $this->request->getVar("last_name"),
						"email" => $this->request->getVar("email"),
						"password" => Hash::make($this->request->getVar("password")),
						"gender" => $this->request->getVar("gender"),
						"role" => $this->request->getVar("role"),
					];
					if($userModel->update($id, $registrationData)){
						$session->setFlashdata("success", "User updated successfully");
						return redirect()->to(base_url('list-Users'));
					}else{
						return view('Admin/editUser', ['errors' => $userModel->errors()]);
					}	
				}
			}
			return view('Admin/editUser',$data);
		}
		
		public function deleteUser($id= null){
			$userModel = new UserModel();
   $user = $userModel->delete($id);

        $session = session();
        $session->setFlashdata("success", "User deleted successfully");

        return redirect()->to(base_url('list-Users'));
		}
/** PRODUCT CRUD */
/**CATEGORY CRUD */
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
	   return view ('Employee/listCategory', $data);
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


//Start product CRUD
public function addProduct()
{       
   helper(["url","html"]);
   $data['page_title'] = 'Product Form';

    $categoryModel = new CategoryModel();
    $data['categories'] = $categoryModel->groupBy('category_name', 'ASC')->findAll();

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
            "category_id" => $this->request->getVar("category_id"),
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
return view ('Admin/itemForm',$data);
}

public function listProducts(){
	$productModel = new ProductModel();
	 
	 $data = [
	   'page_title'=> 'Products',
 'products'=>$productModel->orderBy('product_id', 'ASC')->findAll(),
	 ]; 
	  return view ('Admin/listProducts', $data);
 }

public function editProduct($id = null){
	$categoryModel = new CategoryModel();
	 $productModel = new ProductModel();
	 $data = [
	  "page_title" => "Edit Products",
	  "categories" => $categoryModel->orderBy('category_name', 'ASC')->findAll(),
	  "products" => $productModel->where("product_id", $id)->first(),
	 ]; 
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
   $file->move( 'assets/productImages/', $name);

}
	   $name = $this->request->getVar('name');
	  $productData = [
		  "product_name" => $this->request->getVar("product_name"),
		  "product_description" => $this->request->getVar("product_description"),
		  "product_image" => $file->getName(),
		  "unit_price" => $this->request->getVar("unit_price"),
		  "category_id" => $this->request->getVar("category_id"),
		   "available_quantity" => $this->request->getVar("available_quantity")
	  ];
	  
	  if($productModel->update($id, $productData) === false){
return view('Admin/editProduct', [
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

	  return view ('Admin/editProduct', $data);
}

public function deleteProduct($id = null)
{
$productModel = new ProductModel();
 $product = $productModel->delete($id);

	  $session = session();
	  $session->setFlashdata("success", "Product deleted successfully");

	  return redirect()->to(base_url('list-products'));
}
//End products CRUD
}



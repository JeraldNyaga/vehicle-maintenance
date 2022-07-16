<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('Admin/Dashboard.php');
    }
    public function listCategories()
    {
        return view('Admin/Categories.php');
    }
    public function addProduct()
    {
        return view('Admin/Add-product.php');
    }
    public function listProducts()
    {
        return view('Admin/Product-list.php');
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

}



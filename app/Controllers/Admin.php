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
    public function listUsers()
    {
        return view('Admin/Users-list.php');
    }
}

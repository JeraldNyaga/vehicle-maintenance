<?php

namespace App\Controllers;

class Client extends BaseController
{
    public function index()
    {
        $data['page_title'] = 'home';
        return view('Client/home.php',$data);
    }
}

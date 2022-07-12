<?php

namespace App\Controllers;

class Client extends BaseController
{
    public function index()
    {
        $data['page_title'] = 'Home';
        return view('Client/home.php',$data);
    }

    public function contact()
    {
        $data['page_title'] = 'Contact Us';
        return view('Client/Contact.php',$data);
    }

    public function appointment()
    {
        $data['page_title'] = 'Book Appointment';
        return view('Client/appointment.php',$data);
    }
}

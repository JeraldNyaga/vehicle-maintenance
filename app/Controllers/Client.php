<?php

namespace App\Controllers;

use App\Models\ContactModel;

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
        if ($this->request->getMethod() == 'post' ) {
            $messageRules = [
                'name'=>'required',
                'email'=>'required|valid_email',
                'phone' =>'min_length[9]',
                'message'=>'required', 
            ];
                if (!$this->validate($messageRules) ) {
                    return view( 'Client/Contact.php', [
                        'validation' => $this->validator,
                    ] );
                } else {
                    $session = session();
                    $contactModel = new ContactModel();
                    
                    $messageData = [
                        'name' => $this->request->getVar( 'name' ),
                        'email' => $this->request->getVar( 'email' ),
                        'phone' => $this->request->getVar( 'phone' ) ,
                        'message' =>  $this->request->getVar('message'),
                    ];
                    if ($contactModel->insert( $messageData ) ) {
                        $session->setFlashdata( 'success', 'Message sent successfully!' );
                        return redirect()->to( base_url( 'client-home' ) );
                    } else {
                        return view( 'Client/Contact.php', [ 'errors' => $contactModel->errors() ] );
                    }
                    return redirect()->to( base_url( 'contact-us' ) );
                }
            }
        return view('Client/Contact.php',$data);
    }

    public function appointment()
    {
        $data['page_title'] = 'Book Appointment';
        return view('Client/appointment.php',$data);
    }
}

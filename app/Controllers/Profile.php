<?php

namespace App\Controllers;

class Profile extends BaseController
 {
    public function clientProfile()
 {
        $data[ 'page_title' ] = 'Profile';
        return view( 'Client/Profile', $data );
    }

    public function adminProfile()
 {
        return view( 'Admin/Profile' );
    }
}

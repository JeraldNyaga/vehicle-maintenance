<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\LoginModel;
use App\Libraries\Hash;

class Auth extends BaseController
 {

    //register function

    public function register() {
        $data[ 'page_title' ] = 'Register';
        helper( [ 'url' ] );
        if ( $this->request->getMethod() == 'post' ) {
            $registrationRules = [
                'first_name'=>'required',
                'last_name'=>'required',
                'email' =>'required|valid_email|is_unique[tbl_users.email]',
                'password'=>'required|min_length[8]',
                'gender'=>'required' ];
                $registrationErrors = [ 'email'  => [ 'is_unique' => 'Sorry. That email has already been taken. Please choose another.' ], ];

                if ( !$this->validate( $registrationRules, $registrationErrors ) ) {
                    return view( 'auth/register', [
                        'validation' => $this->validator,
                    ] );
                } else {
                    $session = session();
                    $userModel = new UserModel();
                    
                    $registrationData = [
                        'first_name' => $this->request->getVar( 'first_name' ),
                        'last_name' => $this->request->getVar( 'last_name' ),
                        'email' => $this->request->getVar( 'email' ),
                        'password' => Hash::make( $this->request->getVar( 'password' ) ),
                        'gender' =>  $this->request->getPost('gender'),
                    ];
                    if ( $userModel->insert( $registrationData ) ) {
                        $session->setFlashdata( 'success', 'Data saved successfully' );
                        return redirect()->to( base_url( 'client-home' ) );
                    } else {
                        return view( 'auth/register', [ 'errors' => $userModel->errors() ] );
                    }
                    return redirect()->to( base_url( 'register-user' ) );
                }
            }
            return view( 'auth/register', $data );
        }
        //Login function

        public function login() {
            helper( [ 'url' ] );
            $data[ 'page_title' ] = 'Login';
            $loginData = [];
            if ( $this->request->getMethod() == 'post' ) {

                helper( [ 'date' ] );
                helper( [ 'url' ] );
                $loginRules = [
                    'email' =>'required|valid_email',
                    'password'=> 'required'
                ];

                if ( !$this->validate( $loginRules ) ) {
                    return view( 'auth/login', [ 'validation' => $this->validator ] );
                } else {
                    //Validated data
                    $userModel = new UserModel();
                    $session = session();
                    $email = $this->request->getVar( 'email' );
                    $password = $this->request->getpost( 'password' );
                    $user = $userModel->where( 'email', $email )->first();
                    //invalid email
                    if ( !$user ) {
                        $session->setFlashdata( 'emailError', 'Email is invalid' );
                    } else {
                        $check_password = Hash::check( $password, $user[ 'password' ] );
                        //correct credentials provided
                        if ( $check_password ) {
                            //$session->setFlashdata( 'success', 'successful login' );
                            //inserting data into loginuser table
                            $loginModel = new LoginModel();
                            $loginData = [
                                'user_id' => $user[ 'user_id' ],
                            ];
                            $loginModel->insert( $loginData );
                            //Method to create session data
                            $sessionData = [
                                'user_id' => $user[ 'user_id' ],
                                'first_name' => $user[ 'first_name' ],
                                'last_name' => $user[ 'last_name' ],
                                'loggedUser' => true
                            ];
                            $session->set( $sessionData );

                            if ( ( $user_role = $user[ 'role' ] ) == 1 ) {
                                return redirect()->to( base_url( 'admin-dashboard' ) );
                            }
                            //ADD PHP TO REDIRECT TO EMPLOYEE PAGE
                            elseif ( ( $user_role = $user[ 'role' ] ) == 3 ) {
                                return redirect()->to( base_url( 'client-home' ) );
                            }

                        } else {
                            $session->setFlashdata( 'passError', 'Password is incorrect.' );
                            // return redirect()->to( '/login.php' );
                        }
                    }

                }
            }
            return view( 'auth/login', $data );

        }

        //Logout function

        public function logout( $id = NULL ) {
            date_default_timezone_set( 'Africa/Nairobi' );
            $logoutTime = date( 'Y-m-d H:i:sa' );
            $loginModel = new LoginModel();
            $id = session()->get( 'user_id' );
            $data = [
                'logout_time'=> strval( $logoutTime ),
            ];
            $loginModel->update( $id, $data );
            session()->destroy();
            return redirect()->to( base_url( 'client-home' ) );
        }
    }
    ?>
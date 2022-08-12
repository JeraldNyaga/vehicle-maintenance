<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
            /** LOGIN/REGISTER ROUTES */
            $routes->match(["get", "post"],'register-user', 'Auth::register');
            $routes->match(["get", "post"],'login-user', 'Auth::login');
            $routes->get('logout-user', 'Auth::logout');
                        /**Profile change */
            $routes->match(["get", "post"],'profile','Profile::index');            
            $routes->match(["get", "post"],'client-profile', 'Profile::clientProfile');
            $routes->match(["get", "post"],'admin-profile', 'Profile::adminProfile');
            $routes->match(["get", "post"],'employee-profile', 'Profile::employeeProfile');

            
$routes->get('client-home', 'Client::index');
$routes->match(["get", "post"],'contact-us', 'Client::contact');
$routes->match(["get", "post"],'book-appointment', 'Client::appointment');
$routes->match(["get", "post"],'client-vehicle-logs', 'Client::clientlogs');
$routes->match(["get", "post"],'client-repair-info(:num)', 'Client::repairDetails/$1');

                 /** ADMIN ROUTES */
$routes->match(["get", "post"],'admin-dashboard', 'Admin::index');
$routes->match(["get", "post"],'orders-list', 'Admin::listOrders');
$routes->match(["get", "post"],'orders-details', 'Admin::ordersDetails');
//Users route
$routes->match(["get", "post"],'create-user', 'Admin::addUser');
$routes->match(["get", "post"],'list-Users', 'Admin::listUsers');
$routes->match(["get", "post"],'edit-user(:num)', 'Admin::editUser/$1');
$routes->match(["get", "post"],'delete-user(:num)', 'Admin::deleteUser/$1');
//category route
$routes->match(["get", "post"],'add-category', 'Admin::addCategory');
$routes->match(["get", "post"],'list-category', 'Admin::listCategory');
$routes->match(["get", "post"],'edit-category(:num)', 'Admin::editCategory/$1');
$routes->match(["get", "post"],'delete-category(:num)', 'Admin::deleteCategory/$1');

//product routes route
$routes->match(["get", "post"],'add-product', 'Admin::addProduct');
$routes->match(["get", "post"],'list-products', 'Admin::listProducts');
$routes->match(["get", "post"],'edit-product(:num)', 'Admin::editProduct/$1');
$routes->match(["get", "post"],'delete-product(:num)', 'Admin::deleteProduct/$1');

//Maintenance routes
$routes->match(["get", "post"],'admin-clients-logs', 'Admin::clientlogs');
$routes->match(["get", "post"],'admin-repair-info(:num)', 'Admin::repairDetails/$1');
$routes->match(["get", "post"],'admin-add-repair(:num)', 'Admin::newRepair/$1');
$routes->match(["get", "post"],'admin-edit-repair(:num)', 'Admin::editRepair/$1');
$routes->match(["get", "post"],'admin-delete-repair(:num)', 'Admin::deleteRepair/$1');
$routes->match(["get", "post"],'admin-add-maintenance', 'Admin::newMaintenance');
$routes->match(["get", "post"],'admin-edit-maintenance(:num)', 'Admin::editMaintenance/$1');
$routes->match(["get", "post"],'admin-delete-maintenance(:num)', 'Admin::deleteMaintenance/$1');
            /** EMPLOYEE ROUTES */
$routes->match(["get", "post"],'employee-dashboard', 'Employee::index');
$routes->match(["get", "post"],'list-category', 'Employee::listCategory');
$routes->match(["get", "post"],'products', 'Employee::listProducts');
$routes->match(["get", "post"],'clients-logs', 'Employee::clientlogs');
$routes->match(["get", "post"],'repair-info(:num)', 'Employee::repairDetails/$1');
$routes->match(["get", "post"],'add-repair(:num)', 'Employee::newRepair/$1');
$routes->match(["get", "post"],'edit-repair(:num)', 'Employee::editRepair/$1');
$routes->match(["get", "post"],'add-maintenance', 'Employee::newMaintenance');
$routes->match(["get", "post"],'edit-maintenance(:num)', 'Employee::editMaintenance/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


$routes->get('/', 'Home::index');
$routes->get('/user', 'Users::new');
$routes->get('/login', 'Login::new');
$routes->get('/logout', 'Login::delete_session');
$routes->get('/pages/(:any)', 'Pages::view/$1');

// ...................Leave Mgt .....................
$routes->get('newLeave','Leave::new');
//$routes->get('(:segment)', 'Home::dashboard/$1');
// Bill Section
$routes->get('(dof)', 'Bill::dashboard/$1');
$routes->get('(convertCurrency)', 'Home::dashboard/$1');
$routes->match(['get','post'],'addBill', 'Bill::addBill');
$routes->match(['get','post'],'updateBill', 'Bill::updateBill');
$routes->match(['get','post'],'editBill/(:num)', 'Bill::editBill/$1');
$routes->match(['get','post'],'allBill', 'Bill::allBills');
$routes->match(['get','post'],'viewInvoices', 'Home::viewInvoices');
$routes->match(['get','post'],'addContract', 'Bill::addContract');
$routes->match(['get','post'],'getContractNo', 'Bill::getContractNo');
//customer
$routes->match(['get','post'],'addCustomer', 'Bill::addCustomer');
$routes->match(['get','post'],'updateCustomer/(:num)', 'Bill::updateCustomer/$1');
$routes->match(['get','post'],'allCustomer', 'Bill::allCustomer');
$routes->match(['get','post'],'editCustomers/(:num)', 'Bill::editCustomer/$1');
//Contract
$routes->match(['get','post'],'allContract', 'Bill::allContract');
$routes->match(['get','post'],'editContract/(:num)', 'Bill::editContract/$1');
$routes->match(['get','post'],'updateContract/(:num)', 'Bill::updateContract/$1');
//$routes->post('(saveBill)', 'Bill::saveBill');

// Admin Section
$routes->get('(addEmp)', 'Home::addEmp');
$routes->get('(allEmp)', 'Home::viewEmp');
$routes->post('create', 'Home::create');
$routes->match(['get', 'post'], 'updateEmpStatus/(:num)/(:num)', 'Home::updateEmpStatus/$1/$2');
$routes->match(['get', 'post'], 'updateEmpDetail/(:num)', 'Home::editEmp/$1');
$routes->match(['get', 'post'],'directory', 'Home::addDirectory');
// $routes->group('admin',function($routes){
//     $routes->post('create', 'Home::create');
   
//     $routes->get('addDept', 'Home::addDept');
//     $routes->get('addLeave', 'Home::addLeaveType');
//     $routes->match(['get', 'post'], 'update/(:num)', 'Home::update/$1');
//     $routes->match(['get', 'post'], 'delete/(:num)', 'Home::delete/$1');
// });

//$routes->get('(:segment)', 'Home::dashboard/$1');

//$routes->get('addEmp', 'Home::addEmp');


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

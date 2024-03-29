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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');

// admin routes
// $routes->group('admin', function($routes)
// {
    $routes->get('/admin/dashboard', 'Admin::index'); //, ['filter' => 'auth']); => kalau sudah konek ke db
    $routes->get('/admin/user-management', 'Admin::user');
    $routes->get('/admin/add-user', 'Admin::useradd');
    $routes->add('/admin/store', 'Admin::createuser');
    $routes->get('/admin/edit-user/(:segment)', 'Admin::useredit/$1');
    $routes->post('/admin/update-user/(:any)', 'Admin::updateuser/$1');
    $routes->get('/admin/room-management', 'Admin::room');
    $routes->get('/admin/add-room', 'Admin::roomadd');
    $routes->add('/admin/create-room', 'Admin::addroom');
    $routes->get('/admin/edit-room/(:segment)', 'Admin::roomedit/$1');
    $routes->post('/admin/update/(:any)', 'Admin::updateroom/$1');
// });

// user routes
$routes->get('/user/dashboard', 'Dashboard::index'); //, ['filter' => 'auth']); => kalau sudah konek ke db
$routes->get('/user/detail', 'Dashboard::detail'); // mungkin tambah :id nanti

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

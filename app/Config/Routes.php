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
$routes->get('/', 'Dashboard::index');
$routes->get('/login', 'Home::login');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/datapelanggan/caring/satubulan', 'Datacaring::satubulan');
$routes->get('/datapelanggan/caring/duabulan', 'Datacaring::duabulan');
$routes->get('/datapelanggan/caring/detail', 'Datacaring::detail');
$routes->get('/datapelanggan/caring/edit', 'Datacaring::edit');

$routes->get('/datapelanggan/visit/satubulan', 'Datavisit::satubulan');
$routes->get('/datapelanggan/visit/duabulan', 'Datavisit::duabulan');
$routes->get('/datapelanggan/visit/detail', 'Datavisit::detail');
$routes->get('/datapelanggan/visit/edit', 'Datavisit::edit');

$routes->get('/dataagenobc', 'Dataagenobc::listdata');
$routes->get('/dataagenobc/detail', 'Dataagenobc::detail');
$routes->get('/dataagenobc', 'Dataagenobc::listdata');
$routes->get('/dataagenobc/tambahdata', 'Dataagenobc::tambahdata');
$routes->get('/dataagenobc/hapusdata', 'Dataagenobc::hapusdata');
$routes->get('/dataagenobc/editdata', 'Dataagenobc::editdata');



$routes->get('/template', 'Home::template');
$routes->get('/documentation', 'Home::documentation');
$routes->get('/documentation1', 'Home::documentation1');
$routes->get('/documentation2', 'Home::documentation2');
$routes->get('/documentation3', 'Home::documentation3');
$routes->get('/tabel', 'Home::tabel');
$routes->get('/eror', 'Home::eror');

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

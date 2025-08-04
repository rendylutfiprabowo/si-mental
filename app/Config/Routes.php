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
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Home::logout');

$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/datapelanggan/caring/satubulan', 'Datacaring::satubulan');
$routes->get('/datapelanggan/caring/detail/(:num)', 'Datacaring::detail/$1');
$routes->get('/datapelanggan/caring/delete/(:num)', 'Datacaring::delete/$1');
$routes->post('/datapelanggan/caring/edit/import', 'Datacaring::import');
$routes->get('/datapelanggan/caring/edit/export', 'Datacaring::export');
$routes->get('/datapelanggan/caring/edit', 'Datacaring::edit');
$routes->get('/datapelanggan/caring/edit/(:num)', 'Datacaring::edit/$1');
$routes->post('/caring/update/(:num)', 'Datacaring::update/$1');

$routes->get('/datapelanggan/caring/duabulan', 'Datacaring2::duabulan');
$routes->get('/datapelanggan/caring2/detail/(:num)', 'Datacaring2::detail/$1');
$routes->get('/datapelanggan/caring2/delete/(:num)', 'Datacaring2::delete/$1');
$routes->post('/datapelanggan/caring2/edit/import', 'Datacaring2::import');
$routes->get('/datapelanggan/caring2/edit/export', 'Datacaring2::export');
$routes->get('/datapelanggan/caring2/edit', 'Datacaring::edit');
$routes->get('/datapelanggan/caring2/edit/(:num)', 'Datacaring2::edit/$1');
$routes->post('/caring2/update/(:num)', 'Datacaring2::update/$1');


$routes->get('/datapelanggan/visit/satubulan', 'Datavisit::satubulan');
$routes->get('/datapelanggan/visit/detail/(:num)', 'Datavisit::detail/$1');
$routes->get('/datapelanggan/visit/delete/(:num)', 'Datavisit::delete/$1');
$routes->post('/datapelanggan/visit/edit/import', 'Datavisit::import');
$routes->get('/datapelanggan/visit/edit/export', 'Datavisit::export');
$routes->get('/datapelanggan/visit/edit', 'Datavisit::edit');
$routes->get('/datapelanggan/visit/edit/(:num)', 'Datavisit::edit/$1');
$routes->post('/visit/update/(:num)', 'Datavisit::update/$1');


$routes->get('/datapelanggan/visit/duabulan', 'Datavisit2::duabulan');
$routes->get('/datapelanggan/visit2/detail/(:num)', 'Datavisit2::detail/$1');
$routes->get('/datapelanggan/visit2/delete/(:num)', 'Datavisit2::delete/$1');
$routes->post('/datapelanggan/visit2/edit/import', 'Datavisit2::import');
$routes->get('/datapelanggan/visit2/edit/export', 'Datavisit2::export');
$routes->get('/datapelanggan/visit2/edit', 'Datavisit::edit');
$routes->get('/datapelanggan/visit2/edit/(:num)', 'Datavisit2::edit/$1');
$routes->post('/visit2/update/(:num)', 'Datavisit2::update/$1');


$routes->get('/dataagen', 'Dataagen::listdata');
$routes->get('/dataagen/detail', 'Dataagen::detail');
$routes->get('/dataagen', 'Dataagen::listdata');
$routes->get('/dataagen/tambahdata', 'Dataagen::tambahdata');
$routes->get('/dataagen/hapusdata', 'Dataagen::hapusdata');
$routes->get('/dataagen/editdata', 'Dataagen::editdata');

$routes->get('/datapelanggan/caring/satubulan/clear', 'Datacaring::clearData');
$routes->get('/datapelanggan/caring/duabulan/clear', 'Datacaring2::clearData');
$routes->get('/datapelanggan/visit/satubulan/clear', 'Datavisit::clearData');
$routes->get('/datapelanggan/visit/duabulan/clear', 'Datavisit2::clearData');


$routes->get('/template', 'Home::template');
$routes->get('/documentation', 'Home::documentation');
$routes->get('/documentation1', 'Home::documentation1');
$routes->get('/documentation2', 'Home::documentation2');
$routes->get('/documentation3', 'Home::documentation3');
$routes->get('/tabel', 'Home::tabel');
$routes->get('/eror', 'Home::eror');

// coba-coba



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

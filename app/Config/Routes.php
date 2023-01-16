<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LandingPage');
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
$routes->get('/', 'LandingPage::index');
$routes->post('kirim/pesan', 'LandingPage::sendMessage');
$routes->get('pupuk/(:num)', 'LandingPage::singleProduct/$1');
$routes->get('pupuk/cari', 'LandingPage::Search');

$routes->match(['GET', 'POST'], 'signin', 'Auth::SignIn');
$routes->get('signout', 'Auth::SignOut');
$routes->get('dashboard', 'Dashboard::index');
//Profile
$routes->get('dashboard/profile/(:any)', 'Dashboard::dataProfile/$1');
$routes->post('dashboard/profile/update', 'Dashboard::updateProfile');
$routes->post('dashboard/profile/update/password', 'Dashboard::updatePassword');
//User
$routes->get('dashboard/user', 'Dashboard::dataAdmin');
$routes->post('dashboard/user/add', 'Dashboard::saveUser');
//Tanaman
$routes->get('dashboard/tanaman', 'Dashboard::dataTanaman');
$routes->post('dashboard/tanaman/add', 'Dashboard::saveTanaman');
$routes->get('dashboard/tanaman/edit/(:num)', 'Dashboard::editTanaman/$1');
$routes->post('dashboard/tanaman/update', 'Dashboard::updateTanaman');
$routes->get('dashboard/tanaman/delete/(:num)', 'Dashboard::deleteTanaman/$1');
$routes->get('dashboard/tanaman/fetch', 'Dashboard::fetchTanaman');
//PupukObat
$routes->get('dashboard/pupukobat', 'Dashboard::dataPupukObat');
$routes->post('dashboard/pupukobat/add', 'Dashboard::savePupukObat');
$routes->get('dashboard/pupukobat/edit/(:num)', 'Dashboard::editPupukObat/$1');
$routes->post('dashboard/pupukobat/update', 'Dashboard::updatePupukObat');
$routes->get('dashboard/pupukobat/delete/(:num)', 'Dashboard::deletePupukObat/$1');
//Pesan
$routes->get('dashboard/pesan', 'Dashboard::dataPesan');

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

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
//LandingPage
$routes->get('/', 'LandingPage::index');
$routes->post('kirim/pesan', 'LandingPage::sendMessage');
$routes->get('pupuk/(:num)', 'LandingPage::singleProduct/$1');
$routes->get('pupuk/cari', 'LandingPage::Search');
//Auth
$routes->match(['GET', 'POST'], 'signin', 'Auth::SignIn');
//Dashboard
$routes->group('dashboard', ['filter' => 'auth'], function ($routes) {
    $routes->get('signout', 'Auth::SignOut');
    $routes->get('/', 'Dashboard::index');
    //Profile
    $routes->group('profile', function ($routes) {
        $routes->get('(:any)', 'Dashboard::dataProfile/$1');
        $routes->post('update', 'Dashboard::updateProfile');
        $routes->post('update/password', 'Dashboard::updatePassword');
    });
    //User
    $routes->group('user', function ($routes) {
        $routes->get('/', 'Dashboard::dataAdmin');
        $routes->post('add', 'Dashboard::saveUser');
    });
    //Tanaman
    $routes->group('tanaman', function ($routes) {
        $routes->get('/', 'Dashboard::dataTanaman');
        $routes->post('add', 'Dashboard::saveTanaman');
        $routes->get('edit/(:num)', 'Dashboard::editTanaman/$1');
        $routes->post('update', 'Dashboard::updateTanaman');
        $routes->get('delete/(:num)', 'Dashboard::deleteTanaman/$1');
    });
    //PupukObat
    $routes->group('pupukobat', function ($routes) {
        $routes->get('/', 'Dashboard::dataPupukObat');
        $routes->post('add', 'Dashboard::savePupukObat');
        $routes->get('edit/(:num)', 'Dashboard::editPupukObat/$1');
        $routes->post('update', 'Dashboard::updatePupukObat');
        $routes->get('delete/(:num)', 'Dashboard::deletePupukObat/$1');
    });
    $routes->get('pesan', 'Dashboard::dataPesan');
});

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

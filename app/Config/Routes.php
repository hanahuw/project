<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/meows-up', 'Home::meowsup');
$routes->get('/artikel-home', 'Home::artikelhome');
$routes->get('/tutorial', 'Home::tutorial');
$routes->get('/tipsntrik', 'Home::tipsntrik');
$routes->get('/donasi', 'Home::donasi');
$routes->get('/petshop-jp', 'Home::petshopjp');
$routes->get('/petshop-jt', 'Home::petshopjt');
$routes->get('/petshop-jb', 'Home::petshopjb');
$routes->get('/petshop-ju', 'Home::petshopju');
$routes->get('/petshop-js', 'Home::petshopjs');
$routes->get('/petshop-bk', 'Home::petshopbk');
$routes->get('/mau-adopsi', 'Home::mauadopsi');
$routes->get('/petklinik-jp', 'Home::petklinikjp');
$routes->get('/petklinik-jt', 'Home::petklinikjt');
$routes->get('/petklinik-jb', 'Home::petklinikjb');
$routes->get('/petklinik-ju', 'Home::petklinikju');
$routes->get('/petklinik-js', 'Home::petklinikjs');
$routes->get('/petklinik-bk', 'Home::petklinikbk');
$routes->get('/interme-ow', 'Home::intermeow');
$routes->get('/artikel2', 'Home::artikel2');
$routes->get('/artikel3', 'Home::artikel3');
$routes->get('/tutorial1', 'Home::tutorial1');
$routes->get('/penyakit-tutor1', 'Home::penyakittutor1');
$routes->get('/penyakit2-tutor1', 'Home::penyakit2tutor1');
$routes->get('/penyakit3-tutor1', 'Home::penyakit3tutor1');
$routes->get('/penyakit4-tutor1', 'Home::penyakit4tutor1');
$routes->get('/penyakit5-tutor1', 'Home::penyakit5tutor1');
$routes->get('/penyakit6-tutor1', 'Home::penyakit6tutor1');
$routes->get('/penyakit7-tutor1', 'Home::penyakit7tutor1');
$routes->get('/penyakit8-tutor1', 'Home::penyakit8tutor1');
$routes->get('/penyakit9-tutor1', 'Home::penyakit9tutor1');
$routes->get('/penyakit10-tutor1', 'Home::penyakit10tutor1');
$routes->get('/penyakit11-tutor1', 'Home::penyakit11tutor1');
$routes->get('/penyakit12-tutor1', 'Home::penyakit12tutor1');


/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

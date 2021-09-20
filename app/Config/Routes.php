<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// Custom ku
	// tblbarang
	$routes->get('/tblbarang', 'TblBarang::index');
	$routes->get('/tblbarang/edit/(:segment)', 'TblBarang::edit/$1');
	$routes->delete('/tblbarang/(:any)', 'TblBarang::delete/$1');
	$routes->get('/tblbarang/(:any)', 'TblBarang::delete/$1');
	
	// tblsatuan
	$routes->get('/tblsatuan', 'TblSatuan::index');
	$routes->get('/tblsatuan/edit/(:segment)', 'TblSatuan::edit/$1');
	$routes->delete('/tblsatuan/(:num)', 'TblSatuan::delete/$1');
	$routes->get('/tblsatuan/(:any)', 'TblSatuan::delete/$1');
	
	// tblbarangmasuk
	$routes->get('/tblmasuk', 'TblMasuk::index');
	$routes->get('/tblmasuk/form', 'TblMasuk::form');
	$routes->get('/tblmasuk/edit/(:num)', 'TblMasuk::edit/$1');
	$routes->delete('/tblmasuk/(:num)', 'TblMasuk::delete/$1');
	$routes->get('/tblmasuk/(:any)', 'TblMasuk::delete/$1');
	
	// $routes->get('/tblbarang/tblbarangmasuk', 'TblBarang::tblbarangmasuk');
	// $routes->get('/tblbarang/tblbarangkeluar', 'TblBarang::tblbarangkeluar');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

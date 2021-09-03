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
	$routes->get('/tabel/tblbarang', 'Tabel::tblbarang');
	$routes->get('/tabel/tblbarangmasuk', 'Tabel::tblbarangmasuk');
	$routes->get('/tabel/tblbarangkeluar', 'Tabel::tblbarangkeluar');
	$routes->get('/tabel/tblsatuan', 'Tabel::tblsatuan');
	$routes->get('/tabel/formEdtTblBarang/(:segment)', 'Tabel::formEdtTblBarang/$1');
	$routes->delete('/tabel/(:num)', 'Tabel::delete/$1');
	$routes->get('/tabel/(:any)', 'Tabel::delete/$1');
	
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

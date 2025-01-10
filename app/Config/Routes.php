<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// Pocketify Routes
$routes->get('/', 'Home::index');
$routes->get('expenses', 'Expense::index');
$routes->get('expenses/create', 'Expense::create');
$routes->post('expenses', 'Expense::store');
$routes->get('expenses/edit/(:num)', 'Expense::edit/$1');
$routes->post('expenses/update/(:num)', 'Expense::update/$1');
$routes->get('expenses/delete/(:num)', 'Expense::delete/$1');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');

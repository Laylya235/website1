<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::login'); // Halaman Login
$routes->post('/auth/processLogin', 'Auth::processLogin'); // Proses login
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/logout', 'Auth::logout');
$routes->get('/auth/logout', 'Auth::logout');

$routes->resource('pemesanan', ['filter' => 'auth']); // CRUD pemesanan
$routes->resource('bangsal', ['filter' => 'auth']); // CRUD bangsal
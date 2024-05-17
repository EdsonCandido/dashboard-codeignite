<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/**
 * Auth routes
 */
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/login_submit', 'Auth::login_submit');

service('auth')->routes($routes);


/**
 * Dashboard
 */

 $routes->get('/main', 'Main::index');
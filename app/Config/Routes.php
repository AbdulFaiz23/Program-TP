<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/menu', 'MenuController::index');
$routes->get('/menu', 'MenuController::index');
$routes->get('/menuraciksendiri', 'MenuRacikController::index');

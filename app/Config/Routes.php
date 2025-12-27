<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/menu', 'MenuController::index');
$routes->get('/menuraciksendiri', 'MenuRacikController::index');

$routes->get('checkout', 'CheckoutController::index');
$routes->post('checkout/process', 'CheckoutController::process');


$routes->post('checkout/whatsapp', 'CartController::whatsapp');

$routes->get('cart', 'CartController::index');
$routes->post('cart/add', 'CartController::add');
$routes->get('cart/remove/(:any)', 'CartController::remove/$1');


$routes->get('cart/clear', function () {
    session()->remove('cart');
    return redirect()->to('/');
});

$routes->get('glass', 'GlassController::index');
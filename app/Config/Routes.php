<?php

use App\Controllers\Home;
use App\Controllers\UserController;
use App\Controllers\KelasController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('user/profile/(:any)/(:any)/(:any)',[UserController::class,'profile']);

$routes->get('user/create',[UserController::class,'create']);
$routes->post('/user/store',[UserController::class, 'store']);
$routes->get('/user', 'UserController::index');
$routes->get('/user/(:any)/edit',[UserController::class,'edit']);
$routes->put('/user/(:any)',[UserController::class,'update']);
$routes->get('user/(:any)',[UserController::class,'show']);
$routes->delete('/user/(:any)',[UserController::class,'destroy']);

$routes->get('/kelas/create', [KelasController::class,'create']);
$routes->post('/kelas/store',[KelasController::class,'store']);
$routes->get('/kelas','KelasController::index');
$routes->get('/kelas/(:any)/edit',[KelasController::class,'edit']);
$routes->put('/kelas/(:any)', [KelasController::class,'update']);
$routes->get('kelas/(:any)', [KelasController::class,'show']);
$routes->delete('/kelas/(:any)', [KelasController::class,'destroy']);
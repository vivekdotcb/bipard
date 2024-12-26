<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/admin', 'Auth::index');
$routes->get('/login', 'Auth::login');
$routes->post('/cheklogin', 'Auth::cheklogin');
$routes->get('/logout', 'Auth::logout');
$routes->post('delete', 'Common::delete');
$routes->get('db_exoprt', 'Auth::export');
$routes->post('delete_column', 'Table::delete');


$value = getrout();
$routes->get('admin/'.$value, 'Common::index');
$routes->get('admin/'.$value.'/add', 'Common::addEdit');
$routes->get('admin/'.$value.'/edit/(:any)', 'Common::addEdit/$1');
if ($value == 'column') {
	$routes->post('admin/'.$value.'/update', 'Table::columnUpdate');
} else {
	$routes->post('admin/'.$value.'/update', 'Common::update');
	
}
$routes->post('admin/gat-data', 'Common::get_data');
$routes->post('admin/update_status', 'Common::upadateStatus');
$routes->post('verification', 'Common::verification');




//captcha
$routes->get('captcha', 'CaptchaController::generateCaptcha');







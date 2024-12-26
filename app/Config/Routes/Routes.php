<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



include('Common.php');

$routes->get('/', 'Auth::login');
// $routes->get('user/(:any)', 'User::index/$1');

$routes->post('text', 'Bipard::text');
$routes->post('newtext', 'Bipard::newtext');
$routes->post('textarea', 'Bipard::textarea');
$routes->post('number', 'Bipard::number');

$routes->post('admin/mess_daily_report', 'Bipard::list');
$routes->get('admin/mess_daily_report/(:any)', 'Bipard::add_edit/$1');

$routes->post('admin/training_daily_report', 'Bipard::list');
$routes->get('admin/training_daily_report/(:any)', 'Bipard::add_edit/$1');


$routes->post('admin/hostel_inspection_report', 'Bipard::list');
$routes->get('admin/hostel_inspection_report/(:any)', 'Bipard::add_edit/$1');


$routes->post('admin/mess_inspection_report', 'Bipard::list');
$routes->get('admin/mess_inspection_report/(:any)', 'Bipard::add_edit/$1');


$routes->post('admin/daily_night_watch_report', 'Bipard::list');
$routes->get('admin/daily_night_watch_report/(:any)', 'Bipard::add_edit/$1');

$routes->post('admin/hostel_daily_report', 'Bipard::list');
$routes->get('admin/hostel_daily_report/(:any)/(:any)', 'Bipard::add_edit/$1/$2');

// $routes->post('admin/training_admin_profile', 'Bipard::list');
// $routes->get('admin/training_admin_profile/(:any)', 'Bipard::add_edit/$1');

$routes->get('training_report', 'Bipard::training_report');
$routes->get('mess_report', 'Bipard::mess_report');
$routes->get('hostel_report', 'Bipard::hostel_report');

$routes->get('night_inspection', 'Bipard::night_inspection');
$routes->get('mess_inspection', 'Bipard::mess_inspection');
$routes->get('hostel_inspection', 'Bipard::hostel_inspection');


$routes->get('training_daily_report/(:any)', 'Bipard::training_daily_report/$1');
$routes->get('mess_daily_report/(:any)', 'Bipard::mess_daily_report/$1');
$routes->get('hostel_daily_report/(:any)', 'Bipard::hostel_daily_report/$1');

$routes->get('hostelDailyReport/(:any)', 'Bipard::hostelDailyReport/$1');



$routes->get('mess_inspection_report/(:any)', 'Bipard::mess_inspection_report/$1');
$routes->get('hostel_inspection_report/(:any)', 'Bipard::hostel_inspection_report/$1');

$routes->post('admin/mess_inspection_report/list', 'Bipard::list_list');
$routes->post('admin/hostel_inspection_report/list', 'Bipard::list_list');



































// $routes->get('our-team', 'Home::team');
// $routes->get('team-detail', 'Home::teamDetail');
// $routes->get('service', 'Home::service');
// $routes->get('it', 'Home::it');
// $routes->get('non-it', 'Home::nonIt');
// $routes->get('it/(:any)', 'Home::it/$1');
// $routes->get('non-it/(:any)', 'Home::nonIt/$1');
// $routes->get('contact', 'Home::contact'); 
// $routes->get('job-listing', 'Home::job_listing');
// $routes->get('job-details/(:any)', 'Home::job_details/$1');
// $routes->post('apply', 'Home::apply');
// $routes->post('contect_save', 'Home::contect_save');
// $routes->get('faq', 'Home::faq');
// $routes->get('privacy-policy', 'Home::privacy1');
// $routes->get('terms-conditions', 'Home::terms');
// $routes->get('disclaimer', 'Home::disclaimer');
// $routes->get('service-detail', 'Home::serD');
// $routes->get('clientele', 'Home::clientele');
// $routes->post('save-contact', 'Home::save_contact');






































































































































































































































































$routes->get('job-listing', 'Home::job_listing');
$routes->get('job-details/(:any)', 'Home::job_details/$1');
$routes->post('apply', 'Home::apply');
$routes->post('contect_save', 'Home::contect_save');
$routes->get('faq', 'Home::faq');
$routes->get('privacy-policy', 'Home::privacy1');
$routes->get('terms-conditions', 'Home::terms');
$routes->get('disclaimer', 'Home::disclaimer');
$routes->get('service-detail', 'Home::serD');
$routes->get('clientele', 'Home::clientele');
$routes->post('save-contact', 'Home::save_contact');
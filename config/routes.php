<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['student'] = 'Register/student';
$route['save'] = 'Register/save';






$route['employee'] = 'EmployeeController/employee';

$route['employee/add'] = 'EmployeeController/create';

$route['employee/store'] = 'EmployeeController/store';


$route['staff'] = 'StaffController/staff';

$route['employee/edit/(:any)'] = 'EmployeeController/edit/$1';

$route['employee/update'] = 'EmployeeController/update';

$route['employee/delete/(:num)'] = 'EmployeeController/delete/$1';






$route['login'] = 'LoginController/login';
$route['save'] = 'LoginController/save';

$route['logout'] = 'LoginController/logout';

$route['signup'] = 'SignupController/signup';
$route['submit'] = 'SignupController/validate';
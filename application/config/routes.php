<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'login';
$route['login'] = 'login';

$route['admin'] = 'admin/home';

$route['lecturer'] = 'lecturer/home';

$route['student'] = 'student/home';
$route['head_department'] = 'head_department/home';
$route['staff'] = 'staff/home';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

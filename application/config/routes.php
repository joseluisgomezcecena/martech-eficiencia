<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/

//pages
$route['(:any)'] = 'pages/view/$1';

//reports
$route['reports/index'] = 'reports/index';


//forms
$route['forms/create'] = 'forms/create';


//users
$route['users/register'] = 'users/register';
$route['users/login'] = 'users/login';
$route['users/profile'] = 'users/profile';


$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

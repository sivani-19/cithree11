<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login']='E_C/Login_C/login';
$route['register']='E_C/Login_C/register';
$route['forgetpassword']='E_C/Login_C/forgetpassword';
$route['Dashboard']='E_C/Login_C/dashboard';
$route['Admin']='E_C/Login_C/Admin';
$route['product']='EA_C/Login_C/Admin_products';
$route['Add_product']='EA_C/Login_C/Add_products';
$route['Message']='EA_C/Login_C/Message';
$route['Admin_users']='EA_C/Login_C/Admin_Users';
$route['Add_user']='EA_C/Login_C/add_user';
$route['Admin_Dashboard']='EA_C/Login_C/Admin_Dashboard';
$route['product_dashboard']='E_C/Login_C/product_dashboard';
$route['cart']='E_C/Login_C/cart';
$route['search']='E_C/Login_C/search';
$route['profile_update']='E_C/Login_C/update_profile';
$route['delete']="EA_C/Login_C/delete";
$route['Buy_Now']="E_C/Login_C/Buy_Now";
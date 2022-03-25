<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'ClickablePrototypes';

$route['product'] = 'ClickablePrototypes/product';
$route['login'] = 'ClickablePrototypes/login';
$route['register'] = 'ClickablePrototypes/register';
$route['show'] = 'ClickablePrototypes/show';
$route['cart'] = 'ClickablePrototypes/cart';
// admin
$route['admin'] = 'ClickablePrototypes/admin';
$route['dashboard'] = 'ClickablePrototypes/dashboard';
$route['admin/dashboard'] = 'ClickablePrototypes/dashboard';
$route['show_product'] = 'ClickablePrototypes/show_product';
$route['edit'] = 'ClickablePrototypes/edit';
$route['show_details'] = 'ClickablePrototypes/show_details';
$route['add'] = 'ClickablePrototypes/add';

$route['logoff'] = 'ClickablePrototypes/logoff';

$route['user_login'] = 'ClickablePrototypes/user_login';

$route['Users/login'] = 'Users/login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

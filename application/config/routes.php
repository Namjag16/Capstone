<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'ClickablePrototypes';

$route['product'] = 'ClickablePrototypes/product';
$route['login'] = 'ClickablePrototypes/login';
$route['register'] = 'ClickablePrototypes/register';
$route['show'] = 'ClickablePrototypes/show';
$route['cart'] = 'ClickablePrototypes/cart';


$route['admin'] = 'ClickablePrototypes/admin';
$route['dashboard'] = 'ClickablePrototypes/dashboard';
$route['show_product'] = 'ClickablePrototypes/show_product';
$route['edit'] = 'ClickablePrototypes/edit';
$route['show_details'] = 'ClickablePrototypes/show_details';

$route['logoff'] = 'ClickablePrototypes/logoff';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

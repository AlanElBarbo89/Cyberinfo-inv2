<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['(:any)'] = 'Pages/view/$1';
$route['default_controller'] = 'Pages/view';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
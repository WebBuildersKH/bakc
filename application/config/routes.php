<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['administrator'] = 'Dashboard/view';
$route['admin'] = 'Dashboard/view';
$route['administrator/users'] = 'Users';
$route['administrator/user_roles'] = 'Users/view_user_roles';
$route['administrator/new_lawyer_form'] = 'Lawyers';
$route['administrator/profiles'] = 'Lawyers/view_profiles';
$route['administrator/new_user_form'] = 'Users/new_user_form';

$route['administrator/change_passwd'] = 'Users/change_passwd_form';


$route['administrator/inspection_list'] = 'Inspection';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['administrator/switch/(:any)'] = 'libs/LanguageSwitcher/switchLang/$1';


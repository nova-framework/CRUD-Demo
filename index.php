<?php
require('app/core/autoloader.php');

//define routes
Router::get('', 'welcome@index');
Router::get('admin', 'admin@admin');
Router::get('admin/login', 'admin@login');
Router::post('admin/login', 'admin@login');
Router::get('admin/logout', 'admin@logout');

Router::get('contacts', 'contacts@contacts');
Router::get('contacts/add', 'contacts@add');
Router::post('contacts/add', 'contacts@add');
Router::get('contacts/edit/(:num)', 'contacts@edit');
Router::post('contacts/edit/(:num)', 'contacts@edit');
Router::get('contacts/delete/(:num)', 'contacts@delete');

//if no route found
Router::error('error@index');

//execute matched routes
Router::dispatch();
ob_flush();
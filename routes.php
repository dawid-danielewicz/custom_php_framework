<?php

$router->get('', 'HomeController@index');
$router->get('about', 'HomeController@about');
$router->get('contact', 'HomeController@contact');
$router->get('users', 'UserController@index');
$router->get('users/create', 'UserController@create');
$router->post('users', 'UserController@store');
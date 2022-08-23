<?php

$router->get('' , 'PagesController@home');
$router->get('about' , 'PagesController@about');
$router->get('contact' , 'PagesController@contact');





// $router->post('names' , 'controllers/AddNameController.php');
// $router->get('about/cultures' , 'controllers/index.php');

// $router->define([
//     '' => 'controllers/index.php',
//     'about' => 'controllers/AboutController.php',
//     'about/cultures' => 'controllers/AboutCultureController.php',
//     'contact' => 'controllers/ContactController.php',
//     'names' => 'controllers/AddNameController.php'
// ]);



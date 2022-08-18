<?php

$router->get('' , 'controllers/index.php');
$router->get('about' , 'controllers/AboutController.php');
$router->get('about/cultures' , 'controllers/index.php');
$router->get('contact' , 'controllers/ContactController.php');
$router->post('names' , 'controllers/AddNameController.php');






// $router->define([
//     '' => 'controllers/index.php',
//     'about' => 'controllers/AboutController.php',
//     'about/cultures' => 'controllers/AboutCultureController.php',
//     'contact' => 'controllers/ContactController.php',
//     'names' => 'controllers/AddNameController.php'
// ]);



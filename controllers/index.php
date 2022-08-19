<?php
$users = App::get('database')->selectAll('users');


// $users = $app['database']->selectAll('users');

require 'views/index.view.php';
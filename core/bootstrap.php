<?php

$app = [];

// $app['config'] = require 'config.php';

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));



// die(var_dump(App::get('config')));
// App::bind('database', new QueryBuilder(
//     Connection::make($app['config']['database'])  
// ));
// require 'Router.php';
// require 'Request.php';
// require 'Database/Connection.php';
// require 'Database/QueryBuilder.php';
// $app['database'] = new QueryBuilder(
//     Connection::make($app['config']['database'])
// );
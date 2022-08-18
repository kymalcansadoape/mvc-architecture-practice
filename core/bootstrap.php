<?php

$app = [];

$app['config'] = require 'config.php';



require 'Router.php';
require 'Request.php';
require 'Database/Connection.php';
require 'Database/QueryBuilder.php';



$app['database'] = new QueryBuilder(
    
    Connection::make($app['config']['database'])

);
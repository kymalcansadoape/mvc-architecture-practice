<?php

// var_dump('you type ' . $_POST['name']);

$app['database']->insert('users', [
    'name' => $_POST['name'],

]);

header('Location: /');
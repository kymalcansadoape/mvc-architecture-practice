<?php

// var_dump('you type ' . $_POST['name']);

App::get('database')->insert('users', [
    'name' => $_POST['name'],

]);

header('Location: /');
<?php

return [

    'database' => [
        'CONNECTION' => 'mysql:host=127.0.0.1', //! mysql:host=127.0.0.1
        'DB_NAME' => 'db_mytodo',
        'USERNAME' => 'root',
        'PASSWORD' => 'KymApeCoder96', //! KymApeCoder96
        'OPTION' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]

];
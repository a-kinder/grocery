<?php

use function DI\env;
use function DI\get;

return [
    'appName' => 'GroceryImageParser',
    'displayErrorDetails' => true,
    'environment.mode' => env('ENVIRONMENT_MODE', 'local'),
    'database' => [
        'driver' => 'mysqli',
        'host' => env("DB_HOST", "127.0.0.1"),
        'user' => env("DB_USER", "grocery_admin"),
        'password' => env("DB_PASSWORD", 'Ohyieph5Ri2ceetuop7aeGhaoja9Vied'),
        'dbname' => env("DB_NAME", 'grocery_admin'),
        'port' => 3306
    ]
];

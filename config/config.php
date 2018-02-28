<?php

use function DI\env;
use function DI\get;

return [
    'appName' => 'HashPipe',
    'displayErrorDetails' => true,
    'hp.environment' => env('HP_ENVIRONMENT', 'local'),
    'developmentMode' => env('DEVELOPMENT_MODE', true),
    'database' => [
        'driver' => 'mysqli',
        'host' => env("DB_HOST", "127.0.0.1"),
        'user' => env("DB_USER", "hashpipe_admin"),
        'password' => env("DB_PASSWORD", 'Ohka8ushiev6Mul8'),
        'dbname' => env("DB_NAME", 'hashpipe'),
        'port' => 3306
    ],
    'auth0' => [
        'domain' => 'imposium.auth0.com',
        'client_id' => 'ufhMqSk6yChekUeCcWK8d1A9EtzrY7cP',
        'client_secret' => 'RZAc40PQBzr5HHjomfeB58nvvNTWeaij9tHLl9QCDNVlhJ_nEH8Y3v59GKRY9g-2',
        'valid_audiences' => [
            'ufhMqSk6yChekUeCcWK8d1A9EtzrY7cP', //API
            'bcT4BfOY05vs65YziCoHTrkADCPLM5ra'  //Front end
        ]
    ]
];

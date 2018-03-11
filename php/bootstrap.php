<?php
date_default_timezone_set('UTC');
require_once __DIR__ . '/../vendor/autoload.php';
$proxyDir = __DIR__ . '/Proxies/ORM';
$proxyNamespace = "Nickel\\Proxies";
Doctrine\Common\Proxy\Autoloader::register($proxyDir, $proxyNamespace);

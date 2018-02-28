<?php
use Angela\WebApp;
$isWebApp = true;
require_once __DIR__ . '/../php/bootstrap.php';
$webApp = new WebApp();
require_once __DIR__ . '/../php/routes.php';
$webApp->run();

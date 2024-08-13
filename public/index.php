<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PhpMVC\Utils\Router;
use PhpMVC\Controllers\HomeController;

Router::add('GET', '/', HomeController::class, 'index', []);


Router::run();
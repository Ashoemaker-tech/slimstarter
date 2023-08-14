<?php
session_start();
// autoload dependencies with composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';
// boot up the application
$app = require_once __DIR__ . '/../bootstrap/app.php';
// passing request to the app
$app->run();

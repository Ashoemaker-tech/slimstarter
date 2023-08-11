<?php
// autoload dependencies with composer autoloader
require __DIR__ . '/../vendor/autoload.php';
// boot up the application
$app = require __DIR__ . '/../bootstrap/app.php';
// passing request to the app
$app->run();

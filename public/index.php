<?php

/**
 * Autoload global dependencies and allow composer autoloading
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 * Bootstrap application
 */
$app = require __DIR__ . '/../bootstrap/app.php';

/**
 * Running the app passing our requests through to the app
 */
$app->run();

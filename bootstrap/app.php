<?php

use App\Http\HttpKernel;
use DI\Container;

$app = \DI\Bridge\Slim\Bridge::create(new Container);
return HttpKernel::bootstrap($app)->getApplication();

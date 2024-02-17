<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;

/* Global helper functions */
/*
 * validate
 * auth
 * guest
 * redirect
 * collect
 * factory
 * base_path
 * config_path
 * resources_path
 * public_path
 * routes_path
 * storage_path
 * database_path
 * app_path
 * dd
 * throw_when
 * class_basename
 * config
 */

if (!function_exists('validate')) {
    function validate($data)
    {
        $validate = new \App\Support\Validation($data);
        return $validate;
    }
}
if (!function_exists('csrf_field')) {
    // This is the default function that blade calls from the @csrf directive
    // This is the easiest way to wire it into the slim/csrf package
    function csrf_field()
    {
        $csrf = app()->getContainer()->get('csrf');
        $csrfNameKey = $csrf->getTokenNameKey();
        $csrfValueKey = $csrf->getTokenValueKey();
        $csrfName = $csrf->getTokenName();
        $csrfValue = $csrf->getTokenValue();

        $inputs = "
        <input type=\"hidden\" name=\"{$csrfNameKey}\" value=\"{$csrfName}\"/>
        <input type=\"hidden\" name=\"{$csrfValueKey}\" value=\"{$csrfValue}\"/>
        ";
        return $inputs;
    }
}
if (!function_exists('auth')) {
    function auth()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            return (object) $user;
        }
        return false;
    }
}

if (!function_exists('redirect')) {
    function redirect(string $to)
    {
        $redirect = app()->getContainer()->get(\App\Support\Redirect::class);

        return $redirect($to);
    }
}

if (!function_exists('collect')) {
    function collect($items)
    {
        return new Collection($items);
    }
}

if (!function_exists('factory')) {
    function factory(string $model, int $count = 1)
    {
        $factory = new Factory;

        return $factory($model, $count);
    }
}
if (!function_exists('asset')) {
    function asset($path)
    {
        return getenv('APP_URL') . "/{$path}";
    }
}

if (!function_exists('base_path')) {
    function base_path($path = '')
    {
        return  __DIR__ . "/../{$path}";
    }
}

if (!function_exists('config_path')) {
    function config_path($path = '')
    {
        return base_path("config/{$path}");
    }
}

if (!function_exists('storage_path')) {
    function storage_path($path = '')
    {
        return base_path("storage/{$path}");
    }
}

if (!function_exists('database_path')) {
    function database_path($path = '')
    {
        return base_path("database/{$path}");
    }
}

if (!function_exists('public_path')) {
    function public_path($path = '')
    {
        return base_path("public_path/{$path}");
    }
}

if (!function_exists('resources_path')) {
    function resources_path($path = '')
    {
        return base_path("resources/{$path}");
    }
}

if (!function_exists('routes_path')) {
    function routes_path($path = '')
    {
        return base_path("routes/{$path}");
    }
}

if (!function_exists('app_path')) {
    function app_path($path = '')
    {
        return base_path("app/{$path}");
    }
}


if (!function_exists('throw_when')) {
    function throw_when(bool $fails, string $message, string $exception = Exception::class)
    {
        if (!$fails) return;

        throw new $exception($message);
    }
}

if (!function_exists('class_basename')) {
    function class_basename($class)
    {
        $class = is_object($class) ? get_class($class) : $class;

        return basename(str_replace('\\', '/', $class));
    }
}

if (!function_exists('config')) {
    function config($path = null)
    {
        $config = [];
        $folder = scandir(config_path());
        $config_files = array_slice($folder, 2, count($folder));

        foreach ($config_files as $file) {
            throw_when(
                Str::after($file, '.') !== 'php',
                'Config files must be .php files'
            );


            data_set($config, Str::before($file, '.php'), require config_path($file));
        }

        return data_get($config, $path);
    }
}

<?php

use Selamatan\App\Utils\Config;
use Selamatan\App\Utils\View;

if(!function_exists('config')) {
    function config(string $name) {
        $names = explode('.', $name);
        $config = Config::load($names[0]);

        return $config[$names[1]];
    }
}

if(!function_exists('view')) {
    function view(string $name, object|array $params = []) {
        View::factory()->render("{$name}.latte", $params);
    }
}

if(!function_exists('is_method')) {
    function is_method(string $name) {
        $method = $_SERVER['REQUEST_METHOD'];
        return (strtoupper($name) == $method);
    }
}

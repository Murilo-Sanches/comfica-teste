<?php

$route = $_SERVER['REQUEST_URI'];

$route = ltrim($route, '/');

$routes = [
    'comfica/' => 'home',
];

if (array_key_exists($route, $routes)) {
    include './source/pages/' . $routes[$route] . '.php';
} else {
    echo '<h2>Page not found - 404</h2>';
}

?>
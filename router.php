<?php

require_once __DIR__ . '/partials/view.php';

$routes = require_once  __DIR__ . '/routes.php';
$route = rtrim(parse_url($_SERVER['REQUEST_URI'],  PHP_URL_PATH), '/');
$route = $route === '' ? '/' : $route;
$method = $_SERVER['REQUEST_METHOD'];
$content_route = __DIR__ . '/views';


if (array_key_exists($route, $routes[$method])) {
    [$ControllerClass, $controllerMethod, $name, $data] = $routes[$method][$route];
    require_once __DIR__ . "/controllers/{$ControllerClass}.php";
    $controller = new $ControllerClass();
    echo $controller -> $controllerMethod($name, $data);


} else {
    require_once __DIR__ . "/controllers/StaticContentController.php";
    $controller = new StaticContentController();
    echo $controller -> renderContent('404', ["title" => "Not Found!"]);
    include __DIR__ . '/debug.php';
}

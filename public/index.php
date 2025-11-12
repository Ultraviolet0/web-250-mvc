<?php
/**
* ------------------------------------------------------------
* Web250 MVC - Public Front Controller (with Router)
* ------------------------------------------------------------
*/
declare(strict_types=1);
// DEV-ONLY error display (remove in production)
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require __DIR__ . '/../vendor/autoload.php';
use Web250\Mvc\Router;
use Web250\Mvc\Controllers\HomeController;
// 1) Create the Router and register routes
$router = new Router();
// Route: GET / % HomeController::index()
$router->get('/', function () {
return (new HomeController())->index();
});
// Optional alias: /home
$router->get('/home', function () {
return (new HomeController())->index();
});
// Static page example using a closure
$router->get('/about', function () {
return '<h1>About</h1><p>This route is handled by a closure.</p>';
});
// 2) Determine method and path
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';
// 3) Dispatch the route
$router->dispatch($method, $path);

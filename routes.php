<?php
require_once("models/route.php");

$router = new Route;

$router->get('/', 'controllers/index.php');
$router->get('/register', 'controllers/register.php');
$router->get('/login', 'controllers/login.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
?>
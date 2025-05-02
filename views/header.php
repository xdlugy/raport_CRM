<?php
require_once("models/session.php");

if(!session_id()) {
    $session = new Session;
}

require_once("models/route.php");

$router = new Route;

require_once("routes.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
?>
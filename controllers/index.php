<?php
if(!isset($_SESSION['user'])) {
    $router->get('/login', 'controllers/login.php');
}
else {
    require_once("./views/home.php");
}
?>
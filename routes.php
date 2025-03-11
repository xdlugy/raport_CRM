<?php
$request = $_SERVER['REQUEST_URI'];

switch($request) {
    case "/":
        if(!isset($_SESSION['user'])) {
            require_once("./views/login.php");
        }
        else {
            require_once("./views/home.php");
        }
    break;
    case "/register":
        require_once("./views/register.php");
}
?>
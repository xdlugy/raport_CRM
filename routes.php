<?php
$request = $_SERVER['REQUEST_URI'];

switch($request) {
    case "/":
        require_once("./views/login.php");
}
?>
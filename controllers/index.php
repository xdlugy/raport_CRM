<?php

if(!isset($_SESSION['user'])) {
    header('location: /login');
}
else {
    require_once("./views/home.php");
}
?>
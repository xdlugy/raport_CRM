<?php

if(!isset($_SESSION['user'])) {
    require_once('views/register.php');
}
else {
    $route->get('/', 'controllers/index.php');
}

?>
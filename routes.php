<?php

//GET
$router->get('/', 'controllers/index.php');
$router->get('/register', 'controllers/register/register.php');
$router->get('/login', 'controllers/login.php');

//POST
$router->post('/register', 'controllers/register/store.php');
?>
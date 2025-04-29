<?php

//TODO: check vulnerabilities

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$db = new Database;

//check if user exists in database 
$user = $db->execute("SELECT * FROM users WHERE username = {$username} OR email = {$email}");
if($user->rowCount() > 0) {
    require_once('views/register.php');
}

//add user to database
$db->execute("INSERT INTO users (username, email, password) VALUES ({$username}, {$email}, {$password})");

?>
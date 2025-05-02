<?php
session_start();

//TODO: check vulnerabilities

if(!empty($_POST['csrf_token'])) {
    if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die('Invalid CSRF token');
    }
} else {
    die('CSRF token not set');
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$db = new Database;

//check if user exists in database 
$user = $db->execute("SELECT * FROM users WHERE username = :username OR email = :email", [
    ':username'=>$username,
    ':email'=>$email
]);
if($user->rowCount() > 0) {
    header('Location: /register');
}

if($user->rowCount() == 0) {
    //add user to database
    $password = password_hash($password, PASSWORD_BCRYPT);

    $db->execute("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)", [
        ':username'=>$username,
        ':email'=>$email,
        ':password'=>$password
    ]);

    header('Location: /login');
}


?>
<?php
require_once("db.php");

if(isset($_POST['login'])) {
    $username = $_POST['login'];
    $stmt = $dbh->prepare("SELECT * FROM users WHERE username LIKE ?");
    $stmt->execute(["%{$username}%"]);
}
else {
    require_once('./views/login.php');
}

?>
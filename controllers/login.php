<?php
require_once("db.php");

if(isset($_GET['login'])) {
    $username = $_GET['login'];
    $stmt = $dbh->prepare("SELECT * FROM users WHERE username LIKE ?");
    $stmt->execute(["%{$username}%"]);
}

?>
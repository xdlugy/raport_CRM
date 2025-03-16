<?php
require_once("db-controller.php");

$username = $_GET['login'];
$stmt = $dbh->prepare("SELECT * FROM users WHERE username LIKE ?");
$stmt->execute(["%{$username}%"]);

?>
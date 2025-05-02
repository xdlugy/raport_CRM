<?php
require_once("views/header.php");
?>

<form method="GET" action="/controllers/login-controller.php">
<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
<input type="text" name="login" placeholder="Username or email">
<input type="password" name="password" placeholder="Password">
<button type="submit">Login</button>
</form>

<a href="/reset-password">Forgot your password?</a>
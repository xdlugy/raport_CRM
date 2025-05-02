<?php
require_once("views/header.php");
?>

<form method="POST" action="/controllers/register/store.php">
<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
<input type="text" name="username" placeholder="Username">
<input type="email" name="email" placeholder="Email">
<input type="email" name="email_confirm" placeholder="Confirm email">
<input type="password" name="password" placeholder="Password">
<button type="submit">Register</button>
</form>

<a href="/">Already have an account?</a>
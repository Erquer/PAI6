<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>
<body>
<div><a href="user.php">User Panel</a></div>
<?php
require("funkcje.php");

echo "<h2>Nasz system</h2>";

if(isset($_POST['wyloguj'])){
    $_SESSION['zalogowany'] = 0;
}



?>
<form action="logowanie.php" method="post">
    Login: <input name="login" type="text" ><br>
    Hasło: <input name="haslo" type="text"><br>
    <input name="zaloguj" type="submit" value="Zaloguj">
</form>
<form action="cookie.php" method="get">
    Numer: <input name="czas" type="number"><br>
    Wyślij: <input type="submit" name="utworzCookie">
</form>
</body>
</html>

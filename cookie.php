<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>
<body>
<?php
require_once("funkcje.php");
if(isset($_GET['utworzCookie'])){
    setcookie("mojeCoockie",45, time() + $_GET['czas'], "/");
    echo 'Czas życia mojeCookie to: '. $_GET['czas'];
}
?>
</body>
</html>
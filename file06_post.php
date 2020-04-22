<?php
session_start();
if(isset($_SESSION['flash'])){
    echo "Nie dodano pracownika";
    unset($_SESSION['flash']);
}
print<<<KONIEC
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 </head>
 <body>
 
 <form action="file06_redirect.php" method="POST">
 id_prac <input type="text" name="id_prac">
 nazwisko <input type="text" name="nazwisko">
 <input type="submit" value="Wstaw">
 <input type="reset" value="Wyczysc">
 </form>

 <div><a href="file06_get.php">Lista pracowników</a> </div>
KONIEC;
?>

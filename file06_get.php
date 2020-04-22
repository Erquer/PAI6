<?php
session_start();
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if(isset($_SESSION["flash"])){
    echo "<script> alert('Dodano pracowika') </script>";
    unset($_SESSION["flash"]);
}
echo '<div><a href="file06_post.php">Dodaj nowego pracownika</a> </div>';
$sql = "SELECT * FROM pracownicy";
$result = $link->query($sql);
foreach ($result as $v) {
    echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
}
$result->free();
$link->close();

?>
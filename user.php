<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
    <meta charset='UTF-8' />
</head>
<body>
<div><a href="index.php">Do Logowania</a> </div>
<div><form action="index.php" method="post">
        <input value="wyloguj" name="wyloguj" type="submit">
    </form></div>
<?php
    require_once ("funkcje.php");
    if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == 1){
        echo "<div> Zalogowano " . $_SESSION['zalogowanyImie'] ."</div>" ;
    }else{
        header("Location: index.php");
    }
$max_rozmiar = 1024*1024;
    if(isset($_POST['wyslij'])) {
        $extensions=array('image/jpg','image/jpe','image/jpeg','image/gif');
        if (is_uploaded_file($_FILES['plik']['tmp_name'])) {

                if ($_FILES['plik']['size'] > $max_rozmiar) {
                    echo 'Błąd! Plik jest za duży!';
                } else {
                    $typ = $_FILES['plik']['type'];
                    if(in_array($typ,$extensions)){
                        echo 'Odebrano plik: ' . $_FILES['plik']['name'];
                        echo '<br/>';

                        if (isset($_FILES['plik']['type'])) {
                            echo 'Typ: ' . $_FILES['plik']['type'] . '<br/>';
                        }
                        move_uploaded_file($_FILES['plik']['tmp_name'],
                            $_SERVER['DOCUMENT_ROOT'] . '/foto/' . $_FILES['plik']['name']);
                    }else{
                        echo 'Błędny Format Pliku'. '<br/>';
                    }
                }

        } else {
            echo 'Błąd przy przesyłaniu danych!';
        }
        unset($_POST['wyslij']);
    }

?>
<div>
    <img src="foto/653.jpg" alt="pliku nie ma jeszcze na serwerze" width="400" height="200">
    <form action="" method="POST" ENCTYPE="multipart/form-data">
        <input type="file" name="plik"/><br/>
        <input type="submit" value="Wyślij plik" name="wyslij"/>

</div>
</body>
</html>
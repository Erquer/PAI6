<?php
session_start();
require_once ("funkcje.php");
if(isset($_POST["zaloguj"])){
    $login = test_input($_POST["login"]);
    $haslo = test_input($_POST["haslo"]);
    if($login == $osoba1->login && $haslo == $osoba1->haslo) {
        $_SESSION['zalogowanyImie'] = $osoba1->imieNazwisko;
        $_SESSION['zalogowany'] = 1;
        // echo "<div>Przesłany login: $login</div>";
        // echo "<div>Przesłane hasło: $haslo</div>";
        echo "<div>Dane Usera: $osoba1->imieNazwisko </div>";
        header("Location: user.php");
    }else if($login == $osoba2->login && $haslo == $osoba2->haslo){
        $_SESSION['zalogowanyImie'] = $osoba2->imieNazwisko;
        $_SESSION['zalogowany'] = 1;
        // echo "<div>Przesłany login: $login</div>";
        //echo "<div>Przesłane hasło: $haslo</div>";
        echo "<div>Dane Usera: $osoba2->imieNazwisko </div>";

        header("Location: user.php");
    }else{
        header("Location: index.php");
    }
}


?>

<?php
session_start();
$link = mysqli_connect("localhost", "scott", "tiger", "instytut");
if (isset($_POST['id_prac']) &&
    is_numeric($_POST['id_prac']) &&
    is_string($_POST['nazwisko']))
{

    $sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
    $result = $stmt->execute();
    if (!$result) {
        $stmt->close();
       // printf("Query failed: %s\n", mysqli_error($link));
        $_SESSION["flash"] = ["type"=>"failure", "message"=>"nie dodano, popraw dane"];
        header("Location: file06_post.php");
    }else {

        $_SESSION["flash"] = ["type" => "success", "message" => "dodano pracownika"];
        $stmt->close();
        header("Location: file06_get.php");
    }
}
?>
<?php 
    session_start();
    $_SESSION["first"] = $_POST["first_name"];
    $_SESSION["last"] = $_POST["last_name"];
    header('Location: main.php');
?>
<?php
    session_start();
    if ($_POST['login'] === "admin" && $_POST['haslo'] === "a") $_SESSION['login'] = $_POST['login'];
    header("Location: ../logowanie.php");
?>
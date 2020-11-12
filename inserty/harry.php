<?php
$conn = new mysqli("remotemysql.com", "scKdXHDy41", "HT27TrSRyB", "scKdXHDy41");

$sql_autor = "INSERT INTO `insert_tab`(`id_autor`, `Autor`,`Tytul`) VALUES (NULL,'J.K. Rowling','Harry Potter')";
mysqli_query($conn, $sql_autor);


header('Location: https://mikolaj-wojdalski.herokuapp.com/')
?>
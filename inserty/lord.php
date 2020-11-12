<?php
$conn = new mysqli("remotemysql.com", "scKdXHDy41", "HT27TrSRyB", "scKdXHDy41");

$sql = "INSERT INTO `insert_tab` (`id_autor`, `Autor`, `Tytul`) VALUES (NULL, 'J.R.R Tolkien', 'Władca pierścieni')";
mysqli_query($conn,$sql);


//header('Location: https://mikolaj-wojdalski.herokuapp.com/')
header('Location: http://127.0.0.1/1/logowanie.php')
?>
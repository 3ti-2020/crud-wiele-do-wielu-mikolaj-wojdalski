<?php
$conn = new mysqli("remotemysql.com", "scKdXHDy41", "HT27TrSRyB", "scKdXHDy41");

$sql = "INSERT INTO `insert_tab` (`id_autor`, `Autor`, `Tytul`, `user`,`data_wyp`,`data_oddania`) VALUES (NULL, 'J.K Rowling', 'Harry Potter', RAND()*999, NOW(), NOW()+INTERVAL 1 MONTH)";
mysqli_query($conn,$sql);


header('Location: https://mikolaj-wojdalski.herokuapp.com/')
//header('Location: http://127.0.0.1/1/logowanie.php')
?>
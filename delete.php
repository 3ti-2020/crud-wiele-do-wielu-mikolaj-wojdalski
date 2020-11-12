<?php
$conn = new mysqli("remotemysql.com", "scKdXHDy41", "HT27TrSRyB", "scKdXHDy41");
 $id = $_POST['id'];
 $sql = "DELETE from lib_autor_tytul WHERE id_autor_tytul='$id'";
 mysqli_query($conn, $sql);
 header('Location: https://mikolaj-wojdalski.herokuapp.com/');
?>


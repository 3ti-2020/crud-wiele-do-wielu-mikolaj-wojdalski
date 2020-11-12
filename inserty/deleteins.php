<?php
$conn = new mysqli("remotemysql.com", "scKdXHDy41", "HT27TrSRyB", "scKdXHDy41");
 
$sql = "DELETE from insert_tab";
 mysqli_query($conn, $sql);
 //header('Location: https://mikolaj-wojdalski.herokuapp.com/');
?>
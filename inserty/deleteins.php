<?php
$conn = new mysqli("remotemysql.com", "scKdXHDy41", "HT27TrSRyB", "scKdXHDy41");
$id1 = $_POST['id1'];
$sql = "DELETE from insert_tab WHERE id_autor='$id1'";


 mysqli_query($conn, $sql);
 header('Location: https://mikolaj-wojdalski.herokuapp.com/');
 //header('Location: http://127.0.0.1/1/logowanie.php')
?>
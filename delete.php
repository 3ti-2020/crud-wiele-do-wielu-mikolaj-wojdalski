<?php
 $conn = new mysqli("sql7.freemysqlhosting.net","sql7373143","ky7DfUhHKN","sql7373143");
 $id = $_POST['id'];
 $sql = "DELETE from lib_autor_tytul WHERE id_autor_tytul='$id'";
 mysqli_query($conn, $sql);
 header('Location: https://mikolaj-wojdalski.herokuapp.com/');
?>
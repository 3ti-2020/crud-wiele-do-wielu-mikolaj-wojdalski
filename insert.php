<?php
 $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373177", "itRjvRpuqe", "sql7373177");
 $sql = "INSERT INTO lib_autor(id_autor, imie) VALUES (NULL, '".$_POST['imie']."') ";
 mysqli_query($conn, $sql);
 header('Location: https://mikolaj-wojdalski.herokuapp.com');
?>

<?php
 $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373177", "itRjvRpuqe", "sql7373177");
 $sql = "INSERT INTO lib_tytul(id_tytul, tytul) VALUES (NULL , '".$_POST['tytul']."') ";
 mysqli_query($conn, $sql);
 header('Location: https://mikolaj-wojdalski.herokuapp.com');
?> 
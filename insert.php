<?php 
$conn = new mysqli("localhost","root","","test");
//$conn = new mysqli("sql7.freemysqlhosting.net","sql7373143","ky7DfUhHKN","sql7373143");

$sqlGetId = "SELECT LAST_INSERT_ID()";

$sql=" INSERT INTO lib_autor (id, name) values (NULL, '".$_POST['name']."') ";
mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sqlGetId);
while ($row = $result->fetch_assoc()) {
    $autorId = $row["LAST_INSERT_ID()"];
}

$sql=" INSERT INTO lib_tytul (id_tytul, tytul) values (NULL, '".$_POST['tytul']."') ";
mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sqlGetId);
while ($row = $result->fetch_assoc()) {
    $tytulId = $row["LAST_INSERT_ID()"];
}

$sql=" INSERT INTO lib_autor_tytul (id_autor_tytul, id_autor,id_tytul) values (NULL, $autorId, $tytulId)";

mysqli_query($conn, $sql);

$conn->close(); 
//header('Location: /php/cos/index.php');
//header('Location: https://jakub-kotlinski.herokuapp.com/');

?>
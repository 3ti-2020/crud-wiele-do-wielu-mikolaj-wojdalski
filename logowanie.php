<?php
    session_start();
    if (!$_SESSION['login']) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Zalogowany</title>
</head>
<body>
   

<div class="container">
    <div class="head">
        <div class="a">
        <a href="https://github.com/3ti-2020/crud-wiele-do-wielu-mikolaj-wojdalski"><div class="ikona"><i class="fab fa-github"></i></div></a>
        
        </div>
        
        <div class="b"> 
            <h1>Mikolaj Wojdalski 14</h1>
            <div class="linki">
            
            <a href="index.php"><div class="link">Wyloguj</div></a>
            
            </div>
       </div>

       <div class="c">
       <a href=""><div class="link">Zalogowano!</div></a>
        </div>
                     
    </div>
    <div class="left">
    <?php
    $conn = new mysqli("remotemysql.com", "scKdXHDy41", "HT27TrSRyB", "scKdXHDy41");
    $result = $conn -> query("select `scKdXHDy41`.`lib_autor_tytul`.`id_autor_tytul` AS `id_autor_tytul`,`scKdXHDy41`.`lib_autor`.`imie` AS `imie`,`scKdXHDy41`.`lib_tytul`.`tytul` AS `tytul` from `scKdXHDy41`.`lib_tytul` join `scKdXHDy41`.`lib_autor_tytul` join `scKdXHDy41`.`lib_autor` where `scKdXHDy41`.`lib_autor_tytul`.`id_autor` = `scKdXHDy41`.`lib_autor`.`id_autor` and `scKdXHDy41`.`lib_autor_tytul`.`id_tytul` = `scKdXHDy41`.`lib_tytul`.`id_tytul`");
    echo("<table border='1'>");
    echo("<th>Id</th>");
    echo("<th>Autor</th>");
    echo("<th>Tytuł</th>");
    echo("<th>Delete</th>");
    while($row = $result -> fetch_assoc()){
        echo("<tr class='myrow'>");
        echo("<td>".$row['id_autor_tytul']."</td>"."<td>".$row['imie']."</td>"."<td>".$row['tytul']."</td>"."<td>
        <form action='delete.php' method='POST'>
        <input type='hidden' name='id' value=".$row['id_autor_tytul'].">
        <input type='submit' class='del' value='Delete'>
        </form> </td>");
        echo("</tr>");
    }
    echo("</table>");
    ?>

</div>
    <div class="right">
        <form action="insert.php" method="POST">
        Autor <br>
            <input type="text" name="imie"><br>Tytuł <br>
            <input type="text" name="tytul"><br>
            <input type="submit" class='send' value="  Wyślij  ">
            
        </form>
    </div>
    
</div>
    
</body>

</html>
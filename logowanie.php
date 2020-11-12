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
            <h3>Zalogowano jako bibliotekarz.</h3>
            <div class="linki">
            
            <a href="log/logout.php" class="link">Wyloguj</a>
            <a href="card/cardin.html"><div class="link">Wypożycz</div></a>
            </div>
       </div>

       <div class="c">
       <a href=""><div class="link">Zalogowano!</div></a>
        </div>
                     
    </div>
    <div class="left">
        <h1>Tabela Usuń książkę</h1>
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
<br>
<h1>Tabela Wypożyczeń</h1>
    <?php
        $conn = new mysqli("remotemysql.com", "scKdXHDy41", "HT27TrSRyB", "scKdXHDy41");
        $result = $conn -> query("SELECT * FROM `insert_tab`");
        echo("<table border='1'>");
        echo("<th>Id</th>");
        echo("<th>Autor</th>");
        echo("<th>Tytuł</th>");
        echo("<th>Oddaj</th>");
        while($row = $result -> fetch_assoc()){
            echo("<tr class='myrow'>");
            echo("<td>".$row['id_autor']."</td>"."<td>".$row['Autor']."</td>"."<td>".$row['Tytul']."</td>"."<td>
            <form action='inserty/deleteins.php' method='POST'>
            <input type='hidden' name='id1' value=".$row['id_autor'].">
            <input type='submit' class='od' value='Oddaj'>
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
            <input type="submit" class='send' value="  Wyślij  "><br><br>
            
            
        </form>
    </div>
    
</div>
    
</body>

</html>
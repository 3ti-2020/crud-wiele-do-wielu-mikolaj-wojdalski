<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mikołaj Wojdalski</title>
</head>
<body>
    <div class="container">
        <div class="top">
            <h1>Mikołaj Wojdalski 14</h1>
        </div>
        <div class="left">
            <div class="insert">
                <form action="insert.php" method="post">
                    <input type="text" class="tekst" placeholder="Podaj autora" name="name" id="">
                    <input type="text" class="tekst" placeholder="Podaj tytuł" name="tytul" id="">
                    <input type="submit" value="Dodaj">
                </form>
            </div>

            <?php

            $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373177", "itRjvRpuqe", "sql7373177");

            $result_autor = $conn->query("SELECT * FROM lib_autor");
            $result_tytuly = $conn->query("SELECT * FROM lib_tytul");

            echo("<form action='krzyz.php' method='POST'  class='insert'>");
            echo("<select name='autor'>");
            while($wiersz=$result_autor->fetch_assoc() ){
                echo("<option value='".$wiersz['id_autor']."'>".$wiersz['imie']."</option>");
            }
            echo("</select>");

            echo("<select name='tytul'>");
            while($wiersz=$result_tytuly->fetch_assoc() ){
                echo("<option value='".$wiersz['id_tytul']."'>".$wiersz['tytul']."</option>");
            }
            echo("</select>");

            echo("<input type='submit' value='DODAJ'>");
            echo("</form>");
           ?>
        </div>
        <div class="mid">
            
            <?php
                $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373177", "itRjvRpuqe", "sql7373177");
                $sql = "SELECT * FROM lib_autor, lib_autor_tytul, lib_tytul WHERE 
                lib_autor.id_autor = lib_autor_tytul.id_autor
                AND lib_tytul.id_tytul = lib_autor_tytul.id_tytul";
                $result = mysqli_query($conn, $sql);

                echo("<table border='1'>");
                echo("
                <th>Nazwisko</th>
                <th>Tytuł</th>
                ");
                while($row=mysqli_fetch_assoc($result)){
                    echo("<tr class='myrow'>");
                    echo("<td>");
                    echo($row['imie']);
                    echo("</td>");
                    echo("<td>");
                    echo($row['tytul']);
                    echo("</td>");
                    echo("</tr>");
                }
                echo("</table>");
            ?>
        </div>
       
    </div>
</body>

</html>
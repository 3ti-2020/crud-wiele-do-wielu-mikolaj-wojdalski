<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mikołaj Wojdalski</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/39dd038290.js" crossorigin="anonymous"></script>
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
            <a href="card/card.html"><div class="link">Karty</div></a>
            <a href="theme/index.html"><div class="link">Zmiana tła</div></a>
            <a href=""><div class="link">Logowanie</div></a>
            </div>
       </div>

       <div class="c">
            
        </div>

      
        
        
    </div>
    <div class="left">
    <?php
    //$conn = new mysqli("localhost","root","","test");
    $conn = new mysqli("sql7.freemysqlhosting.net","sql7373143","ky7DfUhHKN","sql7373143");

    $sql = "SELECT `name`, tytul FROM lib_tytul, lib_autor_tytul, lib_autor WHERE lib_autor_tytul.id_autor=lib_autor.id AND lib_autor_tytul.id_tytul=lib_tytul.id_tytul";

    $result = $conn->query( $sql );
    echo("<table border=3>");
    echo("<tr>
    <td>Autor</td>
    <td>Tytuł</td>
    </tr>");

    while( $row = $result->fetch_assoc())
    {
        echo("<tr class='myrow'>");
                    echo("<td>");
                    echo($row['name']);
                    echo("</td>");
                    echo("<td>");
                    echo($row['tytul']);
                    echo("</td>");
                   // echo("<td> <form action='delete.php' method='POST'> <input type='hidden' name='id' value=".$row['id_autor_tytul']."> <input type='submit' value='delete'> </form> </td>");
                    //echo("</tr>");
    }

    echo("</table>");
?>

</div>
    <div class="right">
        <form action="insert.php" method="POST">
        Autor <br>
            <input type="text" name="name"><br>Tytuł <br>
            <input type="text" name="tytul"><br> 
            <input type="submit" value="Wyślij">
            
        </form>
    </div>
    
</div>
    
</body>
</html>

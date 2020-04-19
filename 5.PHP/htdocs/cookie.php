<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <?php
            if($_SESSION["zalogowany"]!=1){
                header("Location: index.php");
            }
            require("funkcje.php");
            echo "Zalogowano jako " . $_SESSION["zalogowanyImie"]. "<br>";
            if(isSet($_GET["cookie"])){
                setcookie("nazwa", $_GET["czas"], time() + (86400 * 30), "/");
            }
            echo "<br><a href=\"index.php\">Wstecz</a>"
        ?>
        
    </body>
</html>

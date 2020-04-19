<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <?php
            require("funkcje.php");
            echo "<h1> Nasz system </h1>";

            if(isSet($_POST["wyloguj"])){
                $_SESSION["zalogowany"] = 0;
            }
            
        
        ?>
        <fieldset> 
            <legend>Formularz do logowania</legend>
            <form action= "logowanie.php" method= "post">
                    Login: <input type="text" name="login"><br>
                    Hasło: <input type="text" name ="haslo"><br>
                    <input type="submit" value="Zaloguj" name="zaloguj">
            </form>
        </fieldset>
        <br>
        <fieldset>
            <legend> Formularz do wgrywania cookies</legend>
            <form action= "cookie.php" method= "get">
                    Czas: <input type="number" name="czas"><br>

                    <input type="submit" value="Utwórz Cookie" name="cookie">
            </form>
        </fieldset>
        <br>
        <?php
            if (isSet($_COOKIE["nazwa"])){
                echo "Wartość cookie " . $_COOKIE["nazwa"];
            }
        ?>
        <br>
        <a href="user.php">Przejdź do konta</a>
    </body>
</html>
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
            echo "Zalogowano";
            echo " jako " . $_SESSION["zalogowanyImie"];
        ?>
        <fieldset>
            <legend>Załaduj zdjęcie na serwer i stronę</legend>
            <form action= "user.php" method= "post" enctype='multipart/form-data'>
                    <input name= "myfile" type="file" >
                    <input type="submit" value="Załaduj zdjęcie" name="zdjecie">
            </form>
        </fieldset>
        <img src="photo\photo.jpg">
        <?php
            if(isSet($_POST["zdjecie"])){
                $file = getcwd();
                $directory = "/photo/";
                $fileName = $_FILES["myfile"]["name"];
                $fileSize = $_FILES["myfile"]["size"];
                $fileTmpName = $_FILES["myfile"]["tmp_name"];
                $fileType = $_FILES["myfile"]["type"];
                if ($fileName != "" and ($fileType == "image/png" or $fileType == "image/jpeg" or $fileType == "image/PNG" or $fileType == "image/JPEG")) {
                        $uploadPath = $file . $directory . $fileName;
                        if (move_uploaded_file($fileTmpName, $uploadPath)) {
                            echo "<br>Zdjęcie zostało załadowane na serwerze";
                        }
                    }
                
                
            }else{
                echo "Załaduj zdjęcie!";
            }
        
        ?>
        <fieldset>
            <legend> Formularz wylogowywania</legend>
            <form action= "index.php" method= "post">
                    <input type="submit" value="Wyloguj" name="wyloguj">
            </form>
        </fieldset>
        <a href="index.php">Przejdź do okna logowania</a>
    </body>
</html>
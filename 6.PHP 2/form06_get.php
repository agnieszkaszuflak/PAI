<!DOCTYPE html>
<html>
    <?php
    session_start();
    if($_SESSION["info"]==2){
        printf("Wstawienie danych powiodło się! <br/>");
        $_SESSION["info"]= 0;
    }
    else{
        $_SESSION["info"]= 0;
    }
    $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
     if (!$link) {
         printf("Connect failed: %s\n", mysqli_connect_error());
         exit();
     }
    $sql = "SELECT * FROM pracownicy";
    $result = $link->query($sql);
    foreach ($result as $v) {
        echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
     }
     $result->free();
     $link->close();
    ?>

    <a href="form06_post.php">Przejdź do konta</a>
</html>
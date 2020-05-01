<!DOCTYPE html>
<?php
session_start();
if($_SESSION["info"]==1){
    printf("Wstawienie danych nie powiodło się!");
    $_SESSION["info"]= 0;
} else {
    $_SESSION["info"]= 0;
}
?>
<html>
    <body>
        <fieldset>
            <legend> Formularz do dodawania nowego pracownika</legend>
            <form action= "form06_redirect.php" method= "post">
                    Identyfikator pracownika <input type="text" name="id_prac"><br>
                    Nazwisko <input type="text" name="nazwisko"><br>
                    <input type="submit" value="Wstaw" name="wstaw">
                    <input type="reset" value="Wyczysc">
            </form>
        </fieldset>
    </body>

<a href="form06_get.php">Przejdź do konta</a>
</html>
<?php

session_start();

if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
{
    header('Location: gra.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
    Tylko martwi ujrzeli koniec wojny - Platon <br/><br/>

    <form action="zaloguj.php" method="POST">
        Login: <br/><input type="text" name="login"/><br/>
        Hasło: <br/><input type="password" name="haslo"/><br/><br/>
        <input type="submit" value="Zaloguj się">
    </form>

    <?php
    if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
    ?>
</body>
</html>
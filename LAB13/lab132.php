<?php

if (array_key_exists('enviar', $_POST)) {
    $expire = time() + 60 * 5;
    setcookie("user", $_REQUEST['visitante'], $expire);
    header("Refreash:0");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 13.2</title>
</head>

<body>

    <?php

    if (isset($_COOKIE['user'])) {
        print("<br> Hola <b>" . $_COOKIE['user'] . "</b>, gracias por visitar nuestro sitio web.");
    } else { ?>
        <form action="lab132.php" method="post">
            <br>
            ¿Cómo te llamas?
            <input type="text" name="visitante">
            <input type="submit" value="Gracias por identificarte" name="enviar">
        </form>

    <?php
    }
    ?>

    <br>
    <a href="lab133.php">continuar...</a>

</body>

</html>
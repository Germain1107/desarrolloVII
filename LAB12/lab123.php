<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 12.3</title>
</head>

<body>

    <h1>Manejo de Sessiones</h1>
    <h2>Paso 3: la variable a sido destruida y su valor se ha perdido</h2>

    <?php

    if (isset($_SESSION['var'])) {
        $var = $_SESSION['var'];
    } else {
        $var = "";
    }
    print("<p>Valor de la variable de session: $var</p>");
    session_destroy();


    ?>

    <a href="lab121.php">volver al paso 1 </a>



</body>

</html>
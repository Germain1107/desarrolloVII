<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Laboratorio 12.1</title>
</head>

<body>
    <h1>Manejo de Sessiones</h1>
    <h2>Paso 1: cree la variable de session y la almacena</h2>

    <?php
    $var = "ejemplo sessiones";
    $_SESSION['var'] = $var;
    print("<p>El valor de la variable de sesion es : $var</p>");

    ?>
    <a href="lab122.php">paso 2</a>

</body>

</html>
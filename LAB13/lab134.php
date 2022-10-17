<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 13.4</title>
</head>

<body>
    <h1>Eliminar un cookei</h1>

    <?php


    if (isset($_COOKIE['user'])) {
        setcookie("user", "", time() + 60 * 5);
        echo "<h2>La cookie 'user' se ha eliminado correctamente</h2><br>";
    } else {
        echo "La cookie 'user' no existe";
    }

    if (isset($_COOKIE['contador'])) {
        setcookie("contador", "", time() + 365 * 24 * 60 * 60);
        echo "<h2>La cookie 'contador' se ha eliminado correctamente</h2><br>";
    } else {
        echo "La cookie 'contador' no existe";
    }
    ?>

    <a href="lab131.php">Volver al contador de visitas</ca>
        <a href="lab132.php">Volver al saludo a usuario</ca>

</body>

</html>
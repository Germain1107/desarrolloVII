<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
</head>

<body>
    <form action="validar.php" method="post">
        <label for="">Nombre</label>
        <input type="text" name="nombre" placeholder="Jair" />
        <br />
        <br />
        <label for="">Apellido</label>
        <input type="text" name="apellido" placeholder="Flores" />
        <br />
        <br />
        <label for="">Email</label>
        <input type="text" name="email" placeholder="jair@gmail.com" pattern="/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/" />
        <br />
        <br />
        <label for="">Password</label>
        <input type="password" name="password" placeholder="" pattern="/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/" />
        <br />
        <br />
        <label for="">Repetir Password</label>
        <input type="password" name="rep_password" placeholder="" pattern="/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/" />
        <br />
        <br />
        <label for="">Ip</label>
        <input type="number" name="ip" placeholder="12.120,120" pattern="/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])" . "(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/" />
        <br />
        <br />
        <input type="submit" value="Registrar Usuario" />
    </form>
</body>

</html>
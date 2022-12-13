<?php

function conectar(){

    #$user="uighipvbfjlr3u2a";
    #$pass="4Cbbs0pHndPWybxiqEUx";
    #$host="bqxs56dkoelrtfh9syw2-mysql.services.clever-cloud.com";
    #$db="bqxs56dkoelrtfh9syw2";

    $user="root"; #Usuario de a BD
    $pass="";  #Contraseña de la BD
    $host="127.0.0.1"; #Host de la BD
    $db="farmagermain"; #Base de datos utilizada
    $cnn=mysqli_connect($host,$user,$pass,$db) or die ("Error al conectar a la base de Datos".mysql_err());
    return $cnn;
}

function desconectar($cnn){

    mysqli_close($cnn);
}
    


?>
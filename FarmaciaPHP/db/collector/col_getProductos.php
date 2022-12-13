<?php


function getProductos($cnn) #Funcion que llama a el Stored Procedure que trae todos los farmacos dentro de la BD
{		
    $sqlQuery="CALL SP_getProductos()";
    $resultado=mysqli_query($cnn,$sqlQuery)or die("Error en la base de datos");
    return $resultado;
}

function getProductosDestacados($cnn) #Funcion que llama a el Stored Procedure que trae 4 farmacos random dentro de la BD
{
    $sqlQuery="CALL SP_getProductosDestacados()";
    $resultado=mysqli_query($cnn,$sqlQuery)or die("Error en la base de datos");
    return $resultado;

}

function getProductoByID($cnn,$id) #Funcion que llama a el Stored Procedure que trae 1 farmacos Especifico dentro de la BD
{
    $sqlQuery="CALL SP_getProductoByID('$id')"; 
    $resultado=mysqli_query($cnn,$sqlQuery)or die("Error en la base de datos");
    return $resultado;
}

?>
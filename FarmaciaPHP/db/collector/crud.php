<?php
include_once '../config/conexionPDO.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$pregunta = (isset($_POST['pregunta'])) ? $_POST['pregunta'] : '';
$TipoPregunta = (isset($_POST['TipoPregunta'])) ? $_POST['TipoPregunta'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$idPregunta = (isset($_POST['idPregunta'])) ? $_POST['idPregunta'] : '';
$arrayrespuestas = (isset($_POST['arrayrespuestas'])) ? $_POST['arrayrespuestas'] : '';

switch($opcion){
    case 1:
        $consulta = "call SP_Encuesta_SetPregunta('$pregunta', '$TipoPregunta', '$arrayrespuestas') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "call SP_Encuesta_UpdatePregunta('$idPregunta','$pregunta', '$TipoPregunta', '$arrayrespuestas') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC); 
        break;
    case 3:        
        $consulta = "DELETE FROM encuesta WHERE enc_id='$idPregunta' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "call SP_Encuesta_GetPreguntas()";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;
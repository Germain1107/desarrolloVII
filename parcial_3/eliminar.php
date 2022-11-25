<?php


$id = isset($_GET['id']) ? $_GET['id'] : die();


require_once('class/noticias.php');
$obj_noticias = new noticia();
$noticia = $obj_noticias->elimnar_noticias($id);



header('Location: index.php');

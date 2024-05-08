<?php
//Recibimos datos de imagen con la variable superglobal $_FILES
//files es un array
$nombre_img = $_FILES["img"]["name"];
$tipo_img = $_FILES["img"]["type"];
$tamaño_img = $_FILES["img"]["size"];

$carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "\img\\";

//movemos imagen de dir temporal al seleccionado en el servidor
move_uploaded_file($_FILES["img"]["tmp_name"],$carpeta_destino.$nombre_img);
?>
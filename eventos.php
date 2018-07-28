<?php 

header ('Content_type: application/json');
$pdo=new PDO("mysql:dbname=curso_php;host=localhost", "root", "janbeash");

//SELECCIONAR LOS EVENTOS DEL CALENDARIO
$sentenciaSQL=$pdo->prepare("SELECT * FROM tabladatos");
$sentenciaSQL->execute();

$resultado=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultado);

 ?>
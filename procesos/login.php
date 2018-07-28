<?php

// CODIGO PARA HACER FUNCIONAR EL PROCESO DE LOGIN, A FIN DE FACILITAR EL INGRESO
// Guardamos datos del formulario en variables

//Las claves están encriptadas en la base de datos con el HASH md5

$email=$_POST['email'];
$clave=md5($_POST['clave']);

//Ponemos una variable para guardar la consulta
$query="SELECT * FROM usuario WHERE Email='$email' AND Clave='$clave'";
$consulta2=consultarSQL($query);

if($consulta2 -> num_rows>=1){
	header("Location: main.php");
} else {
	echo 'Los datos son incorrectos';
}
 ?>

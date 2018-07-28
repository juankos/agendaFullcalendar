<?php

// CODIGO PARA GUARDAR DATOS EN LA BD

require_once "../php/connect.php";

// DEBEMOS CONSIDERAR AQUI, EL CONTENIDO DEL FORMULARIO
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];

// Para la clave debemos ponerle un HASH

$clave=md5($_POST['clave']);

// Creamos una variable QUERY, donde consultaremos a la Base de DATOS
$query="INSERT INTO usuario(Nombre, Apellido, Email, Clave)
					VALUES('$nombre', '$apellido', '$email', '$clave')";

	if (consultarSQL($query)) {
		header("Location: ../main.php");
	} else {
		echo 'Ocurrió un error';
	}


 ?>

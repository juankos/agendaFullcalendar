<?php 

// CONECTAMOS CON EL SERVIDOR

$conectar=@mysql_connect('localhost', 'root', 'janbeash');

// VERIFICAMOS LA CONEXION

if (!$conectar) {
	echo "No se pudo conectar con el servidor";
} else {

	$base=mysql_select_db('curso_php');

	if(!$base){
		echo "no se encontró la base de datos";

	}
}

// RECUPERAR LAS VARIABLES

$titulo=$_POST['titulo'];
$inicio=$_POST['inicio'];
$fin=$_POST['fin'];
$hinicio=$_POST['hinicio'];
$hfin=$_POST['hfin'];

// HACEMOS LA SENTENCIA DE SQL

$sql= "INSERT INTO tabladatos VALUES ('$titulo',
									'$inicio',
									'$fin',
									'$hinicio',
									'$hfin')";

//EJECUTAMOS LA SENTENCIA DE SQL

$ejecutar = mysql_query($sql);

//VERIFICAMOS LA EJECUCION
if (!$ejecutar) {
	echo "hubo algun error";
} else {
	
	header("Location: ../main.php");
}


 ?>
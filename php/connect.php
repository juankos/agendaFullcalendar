<?php 

// CODIGO PHP PARA CONECTARSE A LA BASE DE DATOS

function consultarSQL($query){

	$mysqli = new mysqli ("localhost", "root", "janbeash", "curso_php");

	if (mysqli_connect_errno()) {
	echo "esta presentando problemas";
	}

$mysqli->set_charset("utf8");
$mysqli->autocommit(FALSE);
$mysqli->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);

if ($consulta=$mysqli->query($query)) {

	if ($mysqli->commit()) {
        
	} else {
		echo 'datos NO guardados';
	}	
} else {
	$mysqli->rollback();	
}
return $consulta;
}

 ?>

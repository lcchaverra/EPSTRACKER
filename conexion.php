<?php
function conectar(){

	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="eps_db";
	
	$conexion = mysqli_connect($hostname,$username, $password, $dbname) or die ("html>script language='JavaScript'>alert('¡No es posible conectarse a la base de datos! Vuelve a intentarlo más tarde.'),history.go(-1)/script>/html>");
	
	return $conexion;
}
?>
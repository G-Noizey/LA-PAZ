<?php

require("../bd/conexion.php"); 

$id_user = $_POST['id_user'];
$nombre_user = $_POST['nombre_user'];
$user = $_POST['user'];
$password = $_POST['password'];
$permiso = $_POST['permiso'];

	
$insertar = $mysqli->query("INSERT INTO usuarios VALUES('', '$nombre_user', '$user', '$password','$permiso')");


if($insertar){

	echo '<script>alert("Registro Correcto")</script> ';
	 echo "<script>location.href='cuenta_admin.php'</script>";
	
	}
	else{
		echo '<script>alert("Ese correo ya esta registrado!")</script> ';
		 echo "<script>location.href='cuenta_admin.php'</script>";
	}


?>
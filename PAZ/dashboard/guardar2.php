<?php

require("../conexion2.php");

$id_articulo = $_POST['id_articulo'];
$nombre_a = $_POST['nombre_a'];
$precio_a = $_POST['precio_a'];
$modelo_a = $_POST['modelo_a'];
$disponibles_a = $_POST['disponibles_a'];
	
$insertar = $mysqli->query("INSERT INTO articulos VALUES('', '$nombre_a', '$precio_a', '$modelo_a','$disponibles_a')");


if($insertar){

	echo '<script>alert("Documento guardado")</script> ';
	echo "<script>location.href='cards.php'</script>";
	
	}
	else{
		echo '<script>alert("Problemas al guardar!")</script> ';
	}


?>


 	
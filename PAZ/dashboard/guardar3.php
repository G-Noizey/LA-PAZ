<?php

	require("../conexion2.php"); 

$report_id = $_POST['report_id'];
$asunto = $_POST['asunto'];
$report = $_POST['report'];
$status_r = $_POST['status_r'];
$fecha_r = $_POST['fecha_r'];

	
$insertar = $mysqli->query("INSERT INTO reportes VALUES('', '$asunto', '$report' , '$status_r', '$fecha_r')");


if($insertar){

	echo '<script>alert("Documento guardado")</script> ';
	 echo "<script>location.href='visreporte.php'</script>";
	
	}
	else{
		echo '<script>alert("Problemas al guardar!")</script> ';
	}


?>
<?php

	require("../conexion2.php"); 

$id_cliente = $_POST['id_cliente'];
$nombre_cliente = $_POST['nombre_cliente'];
$tel_cliente = $_POST['tel_cliente'];
$pedido_cliente = $_POST['pedido_cliente'];
$entrega_cliente = $_POST['entrega_cliente'];

	
$insertar = $mysqli->query("INSERT INTO clientes VALUES('', '$nombre_cliente', '$tel_cliente', '$pedido_cliente','$entrega_cliente')");


if($insertar){

	echo '<script>alert("Documento guardado")</script> ';
	 echo "<script>location.href='buttons.php'</script>";
	
	}
	else{
		echo '<script>alert("Problemas al guardar!")</script> ';
	}


?>
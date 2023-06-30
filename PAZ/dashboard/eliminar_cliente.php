<?php

$id_cliente = $_GET['id_cliente'];

require("../conexion2.php");

$eliminar = $mysqli->query("DELETE FROM clientes WHERE id_cliente = '$id_cliente'");

if($eliminar){

	echo '<script>alert("Documento eliminado")</script> ';
	 echo "<script>location.href='buttons.php'</script>";
	
	}
	else{
		echo '<script>alert("Problemas al eliminar!")</script> ';
	}
?>
















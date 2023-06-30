<?php

$id_articulo = $_GET['id_articulo'];

require("../conexion2.php");

$eliminar = $mysqli->query("DELETE FROM articulos WHERE id_articulo = '$id_articulo'");

if($eliminar){

	echo '<script>alert("Documento eliminado")</script> ';
	 echo "<script>location.href='cards.php'</script>";
	
	}
	else{
		echo '<script>alert("Problemas al eliminar!")</script> ';
	}
?>


<?php

$report_id = $_GET['report_id'];

require("../conexion2.php");

$eliminar = $mysqli->query("DELETE FROM reportes WHERE report_id = '$report_id'");

if($eliminar){

	echo '<script>alert("Documento eliminado")</script> ';
	 echo "<script>location.href='visreporte.php'</script>";
	
	}
	else{
		echo '<script>alert("Problemas al eliminar!")</script> ';
	}
?>

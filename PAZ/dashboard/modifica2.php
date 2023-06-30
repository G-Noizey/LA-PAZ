<?php



require("../conexion2.php");

$id_articulo = $_POST['id_articulo'];
$nombre_a = $_POST['nombre_a'];
$precio_a = $_POST['precio_a'];
$modelo_a = $_POST['modelo_a'];
$disponibles_a = $_POST['disponibles_a'];

$modifica = $mysqli->query("UPDATE articulos SET nombre_a = '$nombre_a', precio_a = '$precio_a', modelo_a  = '$modelo_a', disponibles_a = '$disponibles_a' WHERE id_articulo = '$id_articulo'");





echo "<script>location.href='cards.php'</script>";


?>
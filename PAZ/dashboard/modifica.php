<?php



require("../conexion2.php");

$id_cliente = $_POST['id_cliente'];
$nombre_cliente = $_POST['nombre_cliente'];
$tel_cliente = $_POST['tel_cliente'];
$pedido_cliente = $_POST['pedido_cliente'];
$entrega_cliente = $_POST['entrega_cliente'];

$modifica = $mysqli->query("UPDATE clientes SET nombre_cliente = '$nombre_cliente', tel_cliente = '$tel_cliente', pedido_cliente  = '$pedido_cliente', entrega_cliente = '$entrega_cliente' WHERE id_cliente = '$id_cliente'");





echo "<script>location.href='buttons.php'</script>";


?>
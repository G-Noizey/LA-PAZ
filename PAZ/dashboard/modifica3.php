<?php



require("../conexion2.php");

$report_id = $_POST['report_id'];
$asunto = $_POST['asunto'];
$report = $_POST['report'];
$status_r = $_POST['status_r'];


$modifica = $mysqli->query("UPDATE reportes SET asunto = '$asunto', report = '$report', status_r  = '$status_r' WHERE report_id = '$report_id'");





echo "<script>location.href='visreporte.php'</script>";



?>
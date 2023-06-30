<?php



session_start();
$user = $_POST['user'];
$password = $_POST['password'];





require("conexion.php");

$sql = $mysqli->query("SELECT * FROM usuarios WHERE user = '$user'");

if ($f2 = $sql->fetch_array()){ 

if($password == $f2['password']) { 


$_SESSION['user'] = $f2['user'];
$_SESSION['permiso'] = $f2['permiso'];
$_SESSION['nombre_user'] = $f2['nombre_user'];

	echo '<script>alert("BIENVENIDO AL SISTEMA")</script>';
echo "<script>location.href='../dashboard/buttons.php'</script>";


} 
	else{ 
	echo '<script>alert("CONTRASEÑA INCORRECTA")</script>';
echo "<script>location.href='../index.php'</script>";


} 
} 


else{ 
	echo '<script>alert("USUARIO INCORRECTO")</script>';
echo "<script>location.href='../index.php'</script>";


 } 



  ?>
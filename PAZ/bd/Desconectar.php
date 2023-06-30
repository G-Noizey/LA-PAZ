<?php 


session_start();
if ($_SESSION['user']) {
	session_destroy();
	echo "<script>location.href='../index.php'</script>";

}else{

	
echo "<script>location.href='../index.php'</script>";

}

 ?>
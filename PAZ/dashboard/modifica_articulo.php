<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">

<h1>MODIFICACIONES</h1>





<form name="modifica" method="POST" action="modifica2.php">


<?php
$id_articulo = $_GET['id_articulo'];
require("../conexion2.php");
$modi = $mysqli->query("SELECT * FROM articulos WHERE id_articulo = '$id_articulo'");

while($row = mysqli_fetch_array($modi)){


?>


<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">CLAVE</label>
  <input type="text" name='id_articulo' class="form-control" id="exampleFormControlInput1"  value="<?php echo $row[0]?>">


 
<p>
	<p>

  <label for="validationDefault01" class="form-label">NOMBRE DEL ARTICULO</label>
    <input type="text"  value="<?php echo $row[1]?>"class="form-control" id="validationDefault01" name="nombre_a" required>

 
<p>
  <p>

<label for="validationDefault01" class="form-label">PRECIO</label>
    <input type="text"  value="<?php echo $row[2]?>" class="form-control" id="validationDefault01" name="precio_a" required>
<p>
  <p>

<label for="validationDefault01" class="form-label">MODELO</label>
    <input type="text"  value="<?php echo $row[3]?>" class="form-control" id="validationDefault01" name="modelo_a" required>

  <p>
  <p>

<label for="validationDefault01" class="form-label">DISPONIBLES</label>
    <input type="text"  value="<?php echo $row[4]?>" class="form-control" id="validationDefault01" name="disponibles_a" required>

  









  


</div>









<?php } ?>

<p>
	<p> 
<a href="cards.php" class="btn btn-default">Regresar</a>
<input type="submit" name="enviar" value="MODIFICAR" class="btn btn-secondary"> 

</form>

</div>

<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>
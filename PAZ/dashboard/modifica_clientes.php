<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">

<h1>MODIFICACIONES</h1>





<form name="modifica" method="POST" action="modifica.php">


<?php
$id_cliente = $_GET['id_cliente'];
require("../conexion2.php");
$modi = $mysqli->query("SELECT * FROM clientes WHERE id_cliente = '$id_cliente'");

while($row = mysqli_fetch_array($modi)){


?>






<div class="mb-3">

   <label for="validationDefault01" class="form-label">CLAVE</label>
    <input type="text" value="<?php echo $row[0]?>" class="form-control" id="validationDefault01" name="id_cliente",required>


  
    <label for="validationDefault01" class="form-label">NOMBRE DEL CLIENTE</label>
    <input type="text"  value="<?php echo $row[1]?>" class="form-control" id="validationDefault01" name="nombre_cliente" required>


 
<p>
  <p>
 <label for="validationDefault01" class="form-label">TELEFONO</label>
    <input type="number" value="<?php echo $row[2]?>" class="form-control" id="validationDefault01" name="tel_cliente" required>

<p>
  <p>

 <label for="validationDefault01" class="form-label">PEDIDO</label>
    <input type="text"  value="<?php echo $row[3]?>" class="form-control" id="validationDefault01" name="pedido_cliente" required>
  <p>
  <p>

<label for="validationDefault01" class="form-label">FECHA DE ENTREGA</label>
    <input type="date"  value="<?php echo $row[4]?>"  class="form-control" id="validationDefault01" name="entrega_cliente" required>













</div>





<?php } ?>

<p>
	<p> 
<a href="buttons.php" class="btn btn-default">Regresar</a>
<input type="submit" name="enviar" value="MODIFICAR" class="btn btn-secondary"> 

</form>

</div>

<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>-
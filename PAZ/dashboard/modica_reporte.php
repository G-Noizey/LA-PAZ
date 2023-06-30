<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">

<h1>MODIFICACIONES</h1>





<form name="modifica" method="POST" action="modifica3.php">


<?php
$report_id = $_GET['report_id'];
require("../conexion2.php");
$modi = $mysqli->query("SELECT * FROM reportes WHERE report_id = '$report_id'");

while($row = mysqli_fetch_array($modi)){


?>

<div>


<div class="mb-3">
<label for="exampleFormControlInput1" class="form-label">CLAVE</label>
  <input type="text" name='report_id' class="form-control" id="exampleFormControlInput1"  value="<?php echo $row[0]?>">





<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Asunto</label>
  <input type="text" name="asunto" class="form-control" value="<?php echo $row[1]?>" placeholder="texto">
</div>


 <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Reporte</label>
  <input type="text" name="report" class="form-control" value="<?php echo $row[2]?>" placeholder="texto">
</div>



<div class="col-mb-3">
  
  <select name="status_r" class="form-control">
<option><?php echo $row[3]?></option>
<option value="ACTIVO">ACTIVO</option>    
<option value="INACTIVO">INACTIVO</option>
<option value="PENDIENTE">PENDIENTE</option>

  </select>


</div>




</div>


</div>






<?php } ?>

<p>
	<p> 
<a href="visreporte.php" class="btn btn-default">Regresar</a>
<input type="submit" name="enviar" value="MODIFICAR" class="btn btn-secondary"> 

</form>

</div>

<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>
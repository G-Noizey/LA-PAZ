<?php require_once "vistas/parte_superior.php"?>

<div class="container">	



<form  method="POST" action="guardar3.php">

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Asunto</label>
  <input type="text" name="asunto" class="form-control" id="exampleFormControlInput1", minlength="5" placeholder="texto">
</div>


<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Reporte</label>
  <textarea class="form-control" name="report" id="exampleFormControlTextarea1", 	rows="20"></textarea>

</div>


 <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Fecha de registro</label>
    <input type="datetime-local" name="fecha_r" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Ingrese fecha del registro.
    </div>

<p>



<div class="col-mb-3">
	
	<select name="status_r" class="form-control">
<option value="ACTIVO">ACTIVO</option>		
<option value="INACTIVO">INACTIVO</option>
<option value="PENDIENTE">PENDIENTE</option>

	</select>


</div>

<p>	<p>

	
<div class="col-mb-4">			
			<a href="visreporte.php" class="btn btn-default">Informes</a>
</div>

				
				<div class="col-mb-4">		
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>	
			





</form>














</div>


















</div>

<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>
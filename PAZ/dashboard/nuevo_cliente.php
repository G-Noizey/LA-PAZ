	<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">



	
	
		<div class="container">
			<div class="row">
				<h1 style="text-align:center">NUEVO PEDIDO</h1>
			</div>
			
		<p>
			<p>
			
<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">

	


<div class="mb-3">
   	
    <label for="validationDefault01" class="form-label">NOMBRE DEL CLIENTE</label>
    <input type="text" placeholder="ingresa el nombre del cliente" class="form-control" id="validationDefault01" name="nombre_cliente", minlength="10" required>


 
<p>
	<p>
 <label for="validationDefault01" class="form-label">TELEFONO</label>
    <input type="number" placeholder="ingresa el numero de telefono" class="form-control" id="validationDefault01" name="tel_cliente", minlength="10"     required>

<p>
	<p>

 <label for="validationDefault01" class="form-label">PEDIDO</label>
    <input type="text" placeholder="ingresa el pedido" class="form-control" id="validationDefault01" name="pedido_cliente", minlength="20" required>
  <p>
	<p>

<label for="validationDefault01" class="form-label">FECHA DE ENTREGA</label>
    <input type="date"  class="form-control" id="validationDefault01" name="entrega_cliente" required>



</div>



				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="buttons.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>

	</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>

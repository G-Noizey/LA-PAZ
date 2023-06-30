	<?php require_once "vistas/parte_superior.php"?>



<!--INICIO del cont principal-->
<div class="container">



	
	
		<div class="container">
			<div class="row">
				<h1 style="text-align:center">NUEVO ARTICULO</h1>
			</div>

		<P>
			<P>

			
			
<form class="form-horizontal" method="POST" action="guardar2.php" autocomplete="off">


<div class="mb-3">

   <label for="validationDefault01" class="form-label">NOMBRE DEL ARTICULO</label>
    <input type="text" placeholder="ingresa el nombre del articulo" class="form-control" id="validationDefault01" name="nombre_a", minlength="4"  required>

 
<p>
	<p>

<label for="validationDefault01" class="form-label">PRECIO</label>
    <input type="text" placeholder="ingresa el precio" class="form-control" id="validationDefault01" name="precio_a", minlength="7"  required
   >
<p>
	<p>

<label for="validationDefault01" class="form-label">MODELO</label>
    <input type="text" placeholder="ingresa el modelo" class="form-control" id="validationDefault01" name="modelo_a", minlength="5" required>

  <p>
	<p>

<label for="validationDefault01" class="form-label">DISPONIBLES</label>
    <input type="text" placeholder="¿Cuantos articulos disponibles?" class="form-control" id="validationDefault01" name="disponibles_a" required>

  


</div>


				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="cards.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>

	</div>
<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>

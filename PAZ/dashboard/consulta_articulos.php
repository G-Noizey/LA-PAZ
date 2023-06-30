<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>REGISTRO DE ARTICULOS </h1>


  


<div class="container">
        <div class="row">
            <div class="col-lg-12">    

   
            
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">

                            <tr>
                                <th>Codigo</th>
                                <th>Nombre del articulo</th>
                                <th>Precio</th>                      
                                <th>Modelo</th>  
                                <th>Disponibles</th>
                            </tr>


                        </thead>
                        <tbody>


                           <?php require ("../conexion2.php");

    $consulta = $mysqli->query("SELECT * FROM articulos");

    while($datos = mysqli_fetch_array($consulta)){

?>

                            <tr>
                            
                <td><?php echo $datos[0]; ?></td>
                <td><?php echo $datos[1]; ?></td>
                <td><?php echo $datos[2]; ?></td>
                <td><?php echo $datos[3]; ?></td>
                <td><?php echo $datos[4]; ?></td>
                          
 <?php
                                }
                            ?> 

      

  </tr>
                            

                                                           
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>    
      


      
   
</div>




<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>


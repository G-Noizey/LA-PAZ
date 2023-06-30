<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container-fluid">
    <h1>MODIFICAR INFORME</h1>


  


          

 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
             

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                <th>Asunto</th>
                                <th>Reporte</th>
                                <th>Estatus</th> 
                                 <th>Fecha de registro</th> 
                                  <th>Modifica</th>
                                <th>Elimina</th>                
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                  <th>Asunto</th>
                                <th>Reporte</th>
                                <th>Estatus</th> 
                                 <th>Fecha de registro</th> 
                                  <th>Modifica</th>
                                <th>Elimina</th>                
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php require ("../conexion2.php");

    $consulta = $mysqli->query("SELECT * FROM reportes");

    while($datos = mysqli_fetch_array($consulta)){

?>

                            <tr>
                            
             
                <td><?php echo $datos[1]; ?></td>
                <td><?php echo $datos[2]; ?></td>
                 <td><?php echo $datos[3]; ?></td>
                <td><?php echo $datos[4]; ?></td>
              
               <th><a href="modica_reporte.php?report_id=<?php echo $datos[0];?>" class="btn btn-primary" > MODIFICAR</a></th>

<th><a href="eliminar_reporte.php?report_id=<?php echo $datos[0];  ?>" class="btn btn-danger"  onclick="return confirm('¿Seguro que quieres eliminar este reporte?');">ELIMINAR </a></th>
                          


  </tr>



                            

                            <?php
                                }
                            ?> 




                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->                      
              

      





    
    
</div>


<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>
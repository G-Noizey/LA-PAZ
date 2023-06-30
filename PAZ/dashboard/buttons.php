<?php require_once "vistas/parte_superior.php"?>



<!--INICIO del cont principal-->
<div class="container-fluid">
    <h1>PEDIDOS</h1>



      

      
    
    
</div>






   <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
             

                            <td><a href="nuevo_cliente.php" class="btn btn-primary"> NUEVO </a></td>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre del cliente</th>
                                <th>Telefono</th>                      
                                <th>Pedido</th>  
                                <th>Fecha de entrega</th>
                                 <th>Acciones</th>
                                 <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre del cliente</th>
                                <th>Telefono</th>                      
                                <th>Pedido</th>  
                                <th>Fecha de entrega</th>
                                 <th>Acciones</th>
                                 <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                           <?php require ("../conexion2.php");

    $consulta = $mysqli->query("SELECT * FROM clientes");

    while($datos = mysqli_fetch_array($consulta)){

?>

                            <tr>
                            
               
                <td><?php echo $datos[1]; ?></td>
                <td><?php echo $datos[2]; ?></td>
                <td><?php echo $datos[3]; ?></td>
                <td><?php echo $datos[4]; ?></td>
                          





                            <td><a href="modifica_clientes.php?id_cliente=<?php echo $datos[0];  ?>" class="btn btn-primary" > MODIFICAR</a></td>
<td><a href="eliminar_cliente.php?id_cliente=<?php echo $datos[0];  ?>" class="btn btn-danger"  onclick="return confirm('¿Seguro que quieres eliminar este registro?');">ELIMINAR </a></td>

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



        
  



<!--FIN del cont principal-->

<?php require_once "vistas/parte_inferior.php"?>
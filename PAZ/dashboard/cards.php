    <?php require_once "vistas/parte_superior.php"?>


    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../data/datatables.min.css"/>


<script type="text/javascript" src="data/dataTables.min.js"></script>
  

<script src="../data/Buttons-2.2.3/js/dataTables.buttons.min.js"></script>
<script src="../data/JSZip-2.5.0/jszi.min.js"></script>
<script src="../data/pdfmake-0,1.36/pdfmake.min.js"></script>
<script src="../data/pdfmake-0,1.36/vfs_fonts.js"></script>
<script src="../data/Buttons-2.2.3/js/buttons.html5.min.js"></script>

<script type="text/javascript" src="vistas/main.js"></script>



    

    <!--INICIO del cont principal-->
    <div class="container-fluid">
        <h1>ARTÍCULOS </h1>


      


          
       
    </div>






   <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
             

                            <td><a href="nuevo_articulo.php" class="btn btn-primary"> NUEVO </a></td>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                <th>Nombre del artículo</th>
                                    <th>Precio</th>                      
                                    <th>Modelo</th>  
                                    <th>Disponibles</th>
                                    <th>Modifica</th>  
                                    <th>Elimina</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                 <th>Nombre del artículo</th>
                                    <th>Precio</th>                      
                                    <th>Modelo</th>  
                                    <th>Disponibles</th>
                                    <th>Modifica</th>  
                                    <th>Elimina</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                         <?php require ("../conexion2.php");

        $consulta = $mysqli->query("SELECT * FROM articulos");

        while($datos = mysqli_fetch_array($consulta)){

    ?>

                                <tr>
                                
                  
                    <td><?php echo $datos[1]; ?></td>
                    <td><?php echo $datos[2]; ?></td>
                    <td><?php echo $datos[3]; ?></td>
                    <td><?php echo $datos[4]; ?></td>
                              


                                <td><a href="modifica_articulo.php?id_articulo=<?php echo $datos[0];  ?>" class="btn btn-primary"> MODIFICAR</a></td>
    <td><a href="eliminar_articulo.php?id_articulo=<?php echo $datos[0];  ?>" class="btn btn-danger" onclick="return confirm('¿Seguro que quieres eliminar este registro?');">ELIMINAR </a></td>

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
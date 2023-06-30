<?php 

session_start();
if(@!$_SESSION['user']){
  header("location:login.php");
} 



 ?>


<!DOCTYPE html>
<html lang="en">

<head>

  





  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LA PAZ</title>
                  <link rel="icon" type="image/x-icon" href="../../assets/img/LOGO.png" />


  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="vendor/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">      
    


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Sidebar -->
    <ul class="navbar-nav bg-gray-900
   sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="buttons.php">
        <div class="sidebar-brand-icon rotate-n-15"> 
          
        <!--
          <i class="fas fa-laugh-wink"></i>
        -->

        </div>
        <div class="sidebar-brand-text mx-3">LA PAZ <sup>® </sup></div>
      </a>

      <!-- Divider -->
    

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link">


 
      <!-- Heading -->
  
<img class="img-fluid" src="img/LOGO.png" width="200" height="200"> 








      <!-- Nav Item - Pages Collapse Menu -->
      



   

         <li class="nav-item">
                <a class="nav-link" href="buttons.php">
                    <i class="fa fa-building" aria-hidden="true"></i>
                    <span>PEDIDOS</span></a>
            </li>




         <li class="nav-item">
                <a class="nav-link" href="cards.php">
                    <i class="fa fa-tasks" aria-hidden="true"></i>

                    <span>ARTÍCULOS</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="visreporte.php">
                    <i class="fa fa-window-restore" aria-hidden="true"></i>



                    <span>MODIFICAR INFORME</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="informe.php">
                    <i class="fa fa-window-restore" aria-hidden="true"></i>



                    <span>IMPRIMIR INFORME</span></a>
            </li>




<li class="nav-item">
                <a class="nav-link" href="calendar.php">
                   <i class="fas fa-fw fa-wrench"></i>



                    <span>UTILIDADES</span></a>
            </li>

        <hr class="sidebar-divider">

       <li class="nav-item">
                <a class="nav-link" href="../BD/Desconectar.php">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>



                    <span>CERRAR SESIÓN</span></a>
            </li>


<li class="nav-item">
                <a class="nav-link"  href="cuenta_admin.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>


                    <span>REGISTRAR ADMIN</span></a>
            </li>
        


     
            

 

 
   
   

              
                <!-- Heading -->
          
           


   <p>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

<P>
  <P>

      <div class="container">

    </a>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
         <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
<div class="container"> 
  <div class="row"> 
<div class="col-md-2"> 
                                  <?php 
$permiso = $_SESSION['permiso'] ;
if($permiso=='admin'){
?>
                        <a href="reporte.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> REALIZAR REPORTE</a>
                    </div>
</div>
</div>

 <?php  } ?>
           
           

              
             <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sesión de -
                <span class=""><?php echo $_SESSION["nombre_user"];?></span>
<!--                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">-->
                
              </a>


              
            </li>
             

             
            

          </ul>

        </nav>
        <!-- End of Topbar -->

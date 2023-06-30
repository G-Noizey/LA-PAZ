<!doctype html>
<html>
    <head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


                <link rel="icon" type="image/x-icon" href="../assets/img/LOGO.png" />

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>LOGIN</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="2.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        

<style type="text/css">
    
.wrap-login-form-btn {
  width: 100%;
  display: block;
  position: relative;
  z-index: 1;
  border-radius: 10px 10px;
  overflow: hidden;
  margin: 0 auto;
}

</style>


    </head>
    
    <body>
     
      <div class="container-login">
        <div class="wrap-login">

            
            <form class="login-form validate-form" 

            id="formLogin" action="bd/validar.php" method="post">
               

<img  src="dashboard/img/LOGO.png" width="300" height="300"> 

                <span class="login-form-title"></span>
                


                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="text" id="usuario" name="user" placeholder="Usuario">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Constraseña">
                    <span class="focus-efecto"></span>
                </div>
                
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">INICIAR</button>

                    </div>
                </div>
                 <div class="container-login-form-btn">
                    <a href="../" class="btn btn-dark">SALIR</a>
                    </div>

                


            </form>
        </div>
    </div>     
        
        
     <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="codigo.js"></script>    
    </body>
</html>
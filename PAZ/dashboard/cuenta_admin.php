<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>REGISTRO</title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<style type="text/css">
    

    .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;    

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit- linear-gradient(to left, #0e1515, #4f4e4e);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background:  linear-gradient(to left, #0e1515, #4f4e4e);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
 background: linear-gradient(to left, #0e1515, #4f4e4e);

}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}



    


</style>
<style type="text/css">
  
  .texto-justificado{
text-align: center;
}
</style>



</head>




<body>


    <section class="h-100 gradient-form" style="">




  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                                      
                  <h4 class="mt-1 mb-5 pb-1"></h4>
                </div>

                
                <h1 class="text-center">REGISTRO DE ADMINISTRADORES</h1>

                <p>
                <p>


<form method="POST" action="guardar_login.php" class="needs-validation" novalidate>

                  <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="nombre" name="nombre_user" minlength="15" required>
  <label for="floatingInput">Nombre Completo</label>

<div class="valid-feedback">
      OK
    </div>
<div class="invalid-feedback">
      Porfavor ingrese su nombre completo.
    </div>

</div>

<div class="form-floating mb-3">
  <input type="text
  " class="form-control" id="floatingPassword" name="user" placeholder="correo" minlength="4" required>
  <label for="floatingPassword">Usuario</label>

  <div class="valid-feedback">
      OK
    </div>
<div class="invalid-feedback">
      Porfavor ingrese su nombre de usuario.
    </div>


</div>

<div class="form-floating mb-3">
  <input type="password" class="form-control" name="password" placeholder="contraseña"
   minlength="6" required>
  <label for="floatingPassword">Contraseña</label>
  <div class="valid-feedback">
      OK
    </div>
<div class="invalid-feedback">
      Porfavor ingrese su Contraseña.
    </div>


    </div>


<div class="class mb-3">
<input type="hidden" name="permiso" value="admin">
</div>



                  <div class="text-center">

               <button type="submit" name="submit" class="btn btn-dark">CREAR</button>

               <a href="buttons.php" class="btn btn-dark"> SALIR</a>

                  </div>

                       </form>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                
                    
                  </div>

          

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
              <img src="img/logo2.png" alt="" width="500" height="500" class="img-fluid">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<script type="text/javascript">
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()



const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
  usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
  nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
  password: /^.{4,12}$/, // 4 a 12 digitos.
  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const campos = {
  usuario: false,
  nombre: false,
  password: false,
  correo: false,
  telefono: false
}

const validarFormulario = (e) => {
  switch (e.target.name) {
    case "usuario":
      validarCampo(expresiones.usuario, e.target, 'usuario');
    break;
    case "nombre":
      validarCampo(expresiones.nombre, e.target, 'nombre');
    break;
    case "password":
      validarCampo(expresiones.password, e.target, 'password');
      validarPassword2();
    break;
    case "password2":
      validarPassword2();
    break;
    case "correo":
      validarCampo(expresiones.correo, e.target, 'correo');
    break;
    case "telefono":
      validarCampo(expresiones.telefono, e.target, 'telefono');
    break;
  }
}

const validarCampo = (expresion, input, campo) => {
  if(expresion.test(input.value)){
    document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
    document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
    document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
    document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
    document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
    campos[campo] = true;
  } else {
    document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
    document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
    document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
    document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
    document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
    campos[campo] = false;
  }
}

const validarPassword2 = () => {
  const inputPassword1 = document.getElementById('password');
  const inputPassword2 = document.getElementById('password2');

  if(inputPassword1.value !== inputPassword2.value){
    document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
    document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
    document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle');
    document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
    document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
    campos['password'] = false;
  } else {
    document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
    document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
    document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle');
    document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle');
    document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
    campos['password'] = true;
  }
}

inputs.forEach((input) => {
  input.addEventListener('keyup', validarFormulario);
  input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
  e.preventDefault();

  const terminos = document.getElementById('terminos');
  if(campos.usuario && campos.nombre && campos.password && campos.correo && campos.telefono && terminos.checked ){
    formulario.reset();

    document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
    setTimeout(() => {
      document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
    }, 5000);

    document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
      icono.classList.remove('formulario__grupo-correcto');
    });
  } else {
    document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
  }
});



</script>



</body>
</html>

<!--INICIO del cont principal-->

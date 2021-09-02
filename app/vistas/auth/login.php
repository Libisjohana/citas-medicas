<?php  require RUTA_APP .'/vistas/plantilla/header.php'?>
<main class="form-signin">
<?php
        if( $_SERVER['REQUEST_METHOD'] == "POST"){
   
            if(count($errors)>0){
                resultBlock($errors); 
            }
        }        
         ?>
  <form action="<?php echo RUTA_URL;?>auth/iniciarsesion" method="post" >
  
    <img class="mb-4" src="<?=RUTA_URL?>/img/prescripcion.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">Iniciar Sesion</h1>

    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" name="correo" placeholder="name@example.com">
      <label for="floatingInput">Correo</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>
    <div class="mb-3">

        <a  href="<?= RUTA_URL ?>auth/registrar">Registrarme</a>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Acceder</button>
    <p class="mt-5 mb-3 text-muted">© 2021–2022</p>
    <p><a href='https://www.freepik.es/vectores/patron'>Vector de Patrón creado por rawpixel.com - www.freepik.es</a></p>
    <p>Iconos diseñados por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></p>
  </form>
</main>
<?php  require RUTA_APP .'/vistas/plantilla/footer.php'?>
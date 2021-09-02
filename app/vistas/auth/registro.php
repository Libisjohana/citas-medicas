<?php  require RUTA_APP .'/vistas/plantilla/header.php'?>
<main class="form-signin">
<?php
        if( $_SERVER['REQUEST_METHOD'] == "POST"){
   
            if(count($errors)>0){
                resultBlock($errors); 
            }
        }        
         ?>
  <form action="<?php echo RUTA_URL; ?>auth/insertar" method="POST">
    <img class="mb-4" src="<?=RUTA_URL?>/img/prescripcion.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 fw-normal">Crear una cuenta</h1>

    <div class="form-floating mb-3">
      <input type="text" name="nombreu" autofocus class="form-control form-control-sm"value="<?php if(isset($datos['nombreu'])){echo $datos['nombreu'];} ?>"  id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Nombre</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="apellidou" class="form-control form-control-sm" value="<?php if(isset($datos['apellidou'])){echo $datos['apellidou'];} ?>" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Apellido</label>
    </div>
    <div class="form-floating mb-3">
      <input type="email" name="correou" class="form-control form-control-sm"value="<?php if(isset($datos['correou'])){echo $datos['correou'];} ?>"  id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Correo</label>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="telefono" class="form-control form-control-sm"value="<?php if(isset($datos['telefono'])){echo $datos['telefono'];} ?>"  id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Telefono</label>
    </div>
    <div class="form-group mb-3">
     <label>Eps</label>
     <select name="ep_cod" class="form-select">
     <?php foreach($datos['eps'] as $eps): ?>
     <option value="<?php echo $eps->codeps?>"><?php echo $eps->nombre?></option>
         
     <?php endforeach ?>
     </select>
    </div>
    <div class="form-floating mb-3">
      <input type="text" name="direccion" class="form-control form-control-sm"value="<?php if(isset($datos['direccion'])){echo $datos['direccion'];} ?>"  id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Direccion</label>
    </div>
    
    <div class="form-floating mb-3">
      <input type="password" name="password"class="form-control form-control-sm"  id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" name="repassword" class="form-control"  id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Repite Contraseña</label>
    </div>

    <div class="mb-3">

        <a  href="<?= RUTA_URL ?>auth/login">Iniciar Sesion</a>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
    <p class="mt-5 mb-3 text-muted">© 2021–2022</p>
    <p>Iconos diseñados por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></p>
  </form>
</main>
 
<?php  require RUTA_APP .'/vistas/plantilla/footer.php'?>
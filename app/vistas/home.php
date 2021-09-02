<?php  require RUTA_APP .'/vistas/plantilla/header.php'?>
<div class="container">
<?php  require RUTA_APP .'/vistas/layouts/navbar.php'?>
    <div class="card">
    
        <div class="card-header">
            <?=$datos['titulo']?>
        </div>
        <div class="card-body">
         <h3>Bienvenido <?=  $_SESSION['tipo_usuario']?></h3>
        </div>
    </div>
  
  </div>
<footer>
<a href='https://www.freepik.es/vectores/patron'>Vector de Patrón creado por rawpixel.com - www.freepik.es</a>
  Iconos diseñados por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>
<?php  require RUTA_APP .'/vistas/plantilla/footer.php'?>
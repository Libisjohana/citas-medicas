<?php  require RUTA_APP .'/vistas/plantilla/header.php'?>
<div class="container">
<?php  require RUTA_APP .'/vistas/layouts/navbar.php'?>
    <div class="card">
        <div class="card-header">
            <?=$datos['titulo']?>
        </div>
        <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#cod</th>
              <th scope="col">Nombre</th>
              <th scope="col">Correo</th>
              <th scope="col">Telefono</th>
              <th scope="col">Direccion</th>
              <th scope="col">Eps</th>
              <th scope="col">Rol</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($datos['pacientes'] as $user): ?>
                        <tr>
                            <td><?php echo $user->id ?></td>
                            <td><?php echo $user->nombreu ?></td>
                            <td><?php echo $user->correou ?></td>
                            <td><?php echo $user->telefono ?></td>
                            <td><?php echo $user->direccion ?></td>
                            <td><?php echo $user->ep_cod ?></td>
                          
                            <td><?php echo $user->id_rol ?></td>
                          
                            <td>
                            <a href="<?php echo RUTA_URL;?>usuarios/editar/<?php echo $user->id?>" class="btn btn-primary">Editar</a>
                            
                            <button  data-toggle="modal" data-target="#s<?php echo$user->id?>"  class="btn btn-danger">Eliminar</button>
                              
                        </td>
                        </tr>
                       
                        <?php endforeach ?>
        
          </tbody>
        </table>
      </div>
        </div>
    </div>
  
  </div>
<footer>
<a href='https://www.freepik.es/vectores/patron'>Vector de Patrón creado por rawpixel.com - www.freepik.es</a>
  Iconos diseñados por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>
<?php  require RUTA_APP .'/vistas/plantilla/footer.php'?>
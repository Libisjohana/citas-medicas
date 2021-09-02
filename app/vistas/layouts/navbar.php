<div class="nav-item">
    <h5>
      <?php   echo $_SESSION['nombres']; ?>
</h5>
  </div>
<header class="d-flex justify-content-center py-3">
 
      <ul class="nav nav-pills">
        <!-- RUTAS DE USUARIO PARA MEDICOS -->
        <?php if($_SESSION['tipo_usuario'] != 1) {?>
        <li class="nav-item"><a href="<?= RUTA_URL?>pacientes" class="nav-link" aria-current="page">Pacientes</a></li>
       <?php }?>
       <?php if($_SESSION['tipo_usuario'] != 1) {?>
        <li class="nav-item"><a href="<?= RUTA_URL?>medicos" class="nav-link">Medicos</a></li>
        <?php }?>
        <?php if($_SESSION['tipo_usuario'] != 1) {?>
        <li class="nav-item"><a href="#" class="nav-link">Citas</a></li>
        <?php }?>
        <?php if($_SESSION['tipo_usuario'] != 1) {?>
        <li class="nav-item"><a href="#" class="nav-link">Especialidades</a></li>
        <?php }?>
      
       <!-- RUTAS DE USUARIOS PARA PACIENTES -->
       <?php if($_SESSION['tipo_usuario'] == 1) {?>
       <li class="nav-item"><a href="#" class="nav-link active">Historial</a></li>
       <?php }?>
       <?php if($_SESSION['tipo_usuario'] == 1) {?>
        <li class="nav-item"><a href="#" class="nav-link">Agendar cita</a></li>
        <?php }?>
        <li class="nav-item"><a href="<?= RUTA_URL?>auth/salir" class="nav-link">Salir</a></li>
        
      </ul>
    </header>
<?php

require_once 'config/configurar.php';
require_once 'helpers/url_helper.php';


// require_once 'librerias/Base.php';
// require_once 'librerias/Controlador.php';
// require_once 'librerias/Core.php';
spl_autoload_register(function($nombreClass){
    require_once 'librerias/'.$nombreClass.'.php';
});
$iniciar = new Core;
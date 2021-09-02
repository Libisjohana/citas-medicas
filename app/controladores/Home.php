<?php 

class Home extends Controlador{

    public function __construct(){
        session_start();
        if(!isset($_SESSION['id_usuario'])){
            redireccionar('auth/login');
        }
    }
    public function index(){
        $datos = [
            'titulo'=>'citas agendadas'
        ];
       return $this->vista('home',$datos);
    }

   
}
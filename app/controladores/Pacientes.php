<?php 

class Pacientes extends Controlador{

    public function __construct(){
        session_start();
        if(isset($_SESSION['id_usuario'])){
            if($_SESSION['tipo_usuario'] ==1){
                redireccionar('home');
            }
            $this->usuarioModelo = $this->modelo('UsuarioModel');
        }else{
            redireccionar('auth/login');
        }
    }
    public function index(){
   
        $pacientes=$this->usuarioModelo->obtenerpacientes();
       
        $datos=[
            'titulo'=>'Listado de pacientes',
            'pacientes'=>$pacientes,
        ];
        $this->vista('pacientes/index',$datos);
        
    }

    public function agregar($id){
        echo "fsf".$id;
    }
}
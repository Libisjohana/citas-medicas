<?php 

class Paginas extends Controlador{

    public function __construct(){
      
    }
    public function index(){
        $this->vista('informacion');
    }

    public function actualizar($id){
        echo "".$id;
    }
}
<?php 


class EpsModel {

        private $db;

        public function __construct(){
            $this->db = new BASE;
        }

        public function obtenerEps(){
            $this->db->query("SELECT * FROM eps where activo = 1");
            $resultados = $this->db->registros();
            return $resultados;
        }

      


}
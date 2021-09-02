<?php 


class AuthModel {

        private $db;

        public function __construct(){
            $this->db = new BASE;
        }

        public function agregarUsuario($datos){

            $this->db->query("INSERT INTO usuarios(nombreu,apellidou,correou,password,telefono, direccion,ep_cod,id_rol,hora_inicio,hora_salida,activo)
                                                     values(:nombreu,:apellidou,:correou,:password,:telefono, :direccion,:ep_cod,:id_rol,:hora_inicio,:hora_salida,:activo)");
            //vincular los valores
            $this->db->bind(':nombreu',$datos['nombreu']);
            $this->db->bind(':apellidou',$datos['apellidou']);
            $this->db->bind(':correou',$datos['correou']);
            $this->db->bind(':password',$datos['password']);
            $this->db->bind(':telefono',$datos['telefono']);
            $this->db->bind(':direccion',$datos['direccion']);
            $this->db->bind(':hora_inicio',$datos['hora_inicio']);
            $this->db->bind(':hora_salida',$datos['hora_salida']);
            $this->db->bind(':ep_cod',$datos['ep_cod']);
            $this->db->bind(':id_rol',$datos['id_rol']);
            $this->db->bind(':activo',$datos['activo']);
            
                if($this->db->execute()){
                    return true;
                }else{
                    return false;
                }
            }


            public function login($correo,$password){
                $this->db->query("SELECT * from usuarios WHERE password= :password || correou = :correo limit 1");
                $this->db->bind(':password',$password);
               $this->db->bind(':correo',$correo);
         
                $fila = $this->db->registro();
           
              return $fila;
            }

            function emailExiste($email){
                $this->db->query("SELECT id  FROM usuarios WHERE correo = :correo LIMIT 1");
                $this->db->bind(':correo',$email);
                $fila = $this->db->registro();
                if($fila){
                    return true;
                }else{
                    return false;
                }
            }


}
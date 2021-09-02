<?php 

class Auth extends Controlador{

    public function __construct(){
        session_start();
        if(isset($_SESSION['id_usuario'])){
            redireccionar('pacientes');
        }else{
            $this->authModel = $this->modelo('AuthModel');
            $this->epsModel = $this->modelo('EpsModel');
        }
     
    }
    public function index(){
       return $this->vista('auth/login');
    }

    public function registrar(){
        $eps = $this->epsModel->obtenerEps();
    $datos=[
        'eps'=>$eps,
    ];
        return $this->vista('auth/registro',$datos);
    }

    public function insertar(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $errors = [];
            $pass = trim($_POST['repassword']);

            $datos = [
                'nombreu'=>trim($_POST['nombreu']),
                'apellidou'=>trim($_POST['apellidou']),
                'telefono'=>trim($_POST['telefono']),
                'direccion'=>trim($_POST['direccion']),
                'correou'=>trim($_POST['correou']),
                'password'=>trim($_POST['password']),
                'repassword'=>trim($_POST['repassword']),
                'id_rol'=>1,
                'activo'=>1,
                'ep_cod'=>trim($_POST['ep_cod'])
            ];
            if (isNull($datos, $pass)) {
                $errors[] = "Debe llenar todos los campos";
            }
            if (!isEmail($datos['correou'])) {
                $errors[] = "Direccion de correo invalida";
            }
            if (!validPassword($datos['password'], $pass)) {
                $errors[] = "Las contraseñas no coinciden";
            }if (count($errors) == 0) {
                $datos['password'] = hashPassword(trim($_POST['password']));
                if ($this->authModel->agregarUsuario($datos)) {
                    redireccionar('auth/login');
                } else {
                    echo "algo salio mal";
                    die('algo salio mal');

                }

            } else {

                $this->vista('auth/registro', $datos, $errors);
            }

            
        }else{
            $this->vista('auth/registro');
        }
        
    }

    public function iniciarsesion(){
        if ($_SERVER["REQUEST_METHOD"] = "POST") {
            
            $errors = [];
            $correo = trim($_POST['correo']);
            $password = trim($_POST['password']);

            if (isNullLogin($correo, $password)) {
                $errors[] = "Debe llenar todos los campos";
                $this->vista("auth/login", $datos = [], $errors);
            } else if ($this->authModel->login($correo, $password)) {
                $fila = $this->authModel->login($correo, $password);
                    $validpassw = password_verify($password, $fila->password);
                    if ($validpassw) {
                        
                        $_SESSION['id_usuario'] = intval($fila->id);
                        $_SESSION['tipo_usuario'] = intval($fila->id_rol);
                        
                        if($_SESSION['tipo_usuario'] == 2){
                            $_SESSION['nombres'] = $fila->nombreu .' '.$fila->apellidou ;
                            $_SESSION['id']= $fila->id;
                            redireccionar('medicos');
                        }else if ($_SESSION['tipo_usuario'] == 1){
                            $_SESSION['nombres'] = $fila->nombreu .' '.$fila->apellidou ;
                            $_SESSION['id']= $fila->id;
                            redireccionar('home');
                        }
                    } else {
                        $errors[] = "La usuario o contraseña incorrectos";
                        $this->vista("auth/login", $datos = [], $errors);
                    }
               
            }
            
            else {
                $errors[] = "El usuario o correo electronico no existe";
                $this->vista("auth/login", $datos = [], $errors);
            }
        }
    }

    public function salir()
    {
        session_start();
        session_destroy();
        redireccionar('auth/login');

    }
}
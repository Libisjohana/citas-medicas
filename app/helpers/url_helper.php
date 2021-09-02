<?php 

function redireccionar($pagina){
    header('location:'.RUTA_URL.$pagina);
}

function hashPassword($password){
    $hash= password_hash($password,PASSWORD_BCRYPT);
    return $hash;
}
function isNull($datos,$pass){
    if(strlen(trim($datos['nombreu']))<1 ||strlen(trim($datos['password']))<1||strlen(trim($pass))<1||strlen(trim($datos['correou']))<1){
        return true;
    }else{
        return false;
    }
}
function isNullLogin($usuario,$pass){
    if(strlen(trim($usuario))<1 || strlen(trim($pass))<1){
        return true;
    }else{
        return false;
    }
}
function resultBlock($errors){

    echo "<div class='card bg-danger m-2'>
                <div class='card-tools'>
                    <button type='button' class='btn btn-tool' data-card-widget='remove'><i class='fas fa-times'></i>
                    </button>
                </div>
            <div class='card-body text-white'>";
    echo "<ul>";
    foreach($errors as $error){
        echo "<li>".$error."</li>";
    }
    echo"</ul>";
    echo "</div> </div>";
}
function isEmail($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}
function validPassword($var1,$var2){
    if(strcmp($var1,$var2)!=0){
        return false;
    }else{
        return true;
    }
}

<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/login.php';

class LoginController{

    private $model;
    private $user;
    private $pass;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new login();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header_login.php';
        require_once 'view/login/login.php';
        
    }

//forma de mostrar por consola echo("<script>console.log('PHP: "."hsajdgagdhasghjasghjdgsahgdaghjagdagshjdgashjdgasj"."');</script>"); 

    //Método que nos permite logear en el index.
    public function Logear(){
        if(isset($_POST['user']) && isset($_POST['pasw'])){
            $user=$_POST['user'];
            $pass=MD5($_POST['pasw']);                   
            $res = $this->model->Logear($user,$pass);
            if($res>1){
                 header('Location: index.php?c=alumno');
            }
            else{
                header('Location: index.php');
            }
        }
    }
}

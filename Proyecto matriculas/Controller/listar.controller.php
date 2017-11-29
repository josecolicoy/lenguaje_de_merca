<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/listar.php';

class ListarController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new listar();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/listar/listar.php';
        require_once 'view/footer.php';
    }
 //Llamado a la vista alumno-nuevo
    public function Nuevo(){
        $pvd = new listar();

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/listar/listar.php';
        require_once 'view/footer.php';
    }

}

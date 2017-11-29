<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/padre.php';

class PadreController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new padre();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/padre/padre.php';
        require_once 'view/footer.php';
    }

    //Llamado a la vista padre-editar
    public function Crud(){
        $pdr = new padre();

        //Se obtienen los datos del padre a editar.
        if(isset($_REQUEST['id_padre'])){
            $pdr = $this->model->Obtener($_REQUEST['id_padre']);
        }

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/padre/padre-editar.php';
        require_once 'view/footer.php';
  }

    //Llamado a la vista alumno-nuevo
    public function Nuevo(){
        $pdr = new padre();

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/padre/padre-nuevo.php';
        require_once 'view/footer.php';
    }

    //Método que registrar al modelo un nuevo alumno.
    public function Guardar(){
        $pdr = new alumno();

        //Captura de los datos del formulario (vista).
        $pdr->nombres = $_REQUEST['nombres'];
        $pdr->a_paterno = $_REQUEST['a_paterno'];
        $pdr->a_materno = $_REQUEST['a_materno'];
        $pdr->rut_p = $_REQUEST['rut_p'];
        $pdr->telefono = $_REQUEST['telefono'];
        $pdr->genero = $_REQUEST['genero'];
        $pdr->escolaridad = $_REQUEST['escolaridad'];
        $pdr->actividad = $_REQUEST['actividad'];
        $pdr->id_alumno = $_REQUEST['id_alumno'];

        //Registro al modelo alumno.
        $this->model->Registrar($pdr);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: index.php?c=padre');
    }

    //Método que modifica el modelo de un alumno.
    public function Editar(){
        $pdr = new padre();

        $pdr->id_padre = $_REQUEST['id_padre'];
        $pdr->nombres_p = $_REQUEST['nombres_p'];
        $pdr->a_paternop = $_REQUEST['a_paternop'];
        $pdr->a_maternop = $_REQUEST['a_maternop'];
        $pdr->rut_p = $_REQUEST['rut_p'];
        $pdr->telefono = $_REQUEST['telefono'];
        $pdr->genero = $_REQUEST['genero'];
        $pdr->escolaridad = $_REQUEST['escolaridad'];
        $pdr->actividad = $_REQUEST['actividad'];
        $pdr->id_alumno = $_REQUEST['id_alumno'];

        $this->model->Actualizar($pdr);

        header('Location: index.php?c=padre');
    }

    //Método que elimina la tupla alumno con el id dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_padre']);
        header('Location: index.php?c=padre');
    }
}

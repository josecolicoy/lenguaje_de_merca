<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/matricula.php';

class MatriculaController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new matricula();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/matricula/matricula.php';
        require_once 'view/footer.php';
    }

    //Llamado a la vista padre-editar
    public function Crud(){
        $pdr = new matricula();

        //Se obtienen los datos del padre a editar.
        if(isset($_REQUEST['id_matricula'])){
            $pdr = $this->model->Obtener($_REQUEST['id_matricula']);
        }

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/matricula/matricula-editar.php';
        require_once 'view/footer.php';
  }

    //Llamado a la vista alumno-nuevo
    public function Nuevo(){
        $pdr = new matricula();

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/matricula/matricula-nuevo.php';
        require_once 'view/footer.php';
    }

    //Método que registrar al modelo un nuevo alumno.
    public function Guardar(){
        $pdr = new matricula();

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
        header('Location: index.php?c=matricula');
    }

    //Método que modifica el modelo de un alumno.
    public function Editar(){
        $pdr = new matricula();

        $pdr->id_matricula = $_REQUEST['id_matricula'];
        $pdr->fecha = $_REQUEST['fecha'];
        $pdr->id_curso = $_REQUEST['id_curso'];
        $pdr->id_alumno = $_REQUEST['id_alumno'];

        $this->model->Actualizar($pdr);

        header('Location: index.php?c=matricula');
    }

    //Método que elimina la tupla alumno con el id dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_matricula']);
        header('Location: index.php?c=matricula');
    }
}

<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/alumno.php';

class AlumnoController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new alumno();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/alumno/alumno.php';
        require_once 'view/footer.php';
    }

    //Llamado a la vista alumno-editar
    public function Crud(){
        $alu = new alumno();

        //Se obtienen los datos del alumno a editar.
        if(isset($_REQUEST['id_alumno'])){
            $alu = $this->model->Obtener($_REQUEST['id_alumno']);
        }

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/alumno/alumno-editar.php';
        require_once 'view/footer.php';
  }

    //Llamado a la vista alumno-nuevo
    public function Nuevo(){
        $alu = new alumno();

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/alumno/alumno-nuevo.php';
        require_once 'view/footer.php';
    }

    //Método que registrar al modelo un nuevo alumno.
    public function Guardar(){
        $alu = new alumno();

        //Captura de los datos del formulario (vista).
        $alu->nombres_a = $_REQUEST['nombres_a'];
        $alu->a_paternoa = $_REQUEST['a_paternoa'];
        $alu->a_maternoa = $_REQUEST['a_maternoa'];
        $alu->sexo = $_REQUEST['sexo'];
        $alu->rut_a = $_REQUEST['rut_a'];
        $alu->fech_nacimiento = $_REQUEST['fech_nacimiento'];
        $alu->direccion_a = $_REQUEST['direccion_a'];
        $alu->comuna_a = $_REQUEST['comuna_a'];

        //Registro al modelo alumno.
        $this->model->Registrar($alu);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: index.php?c=padre&a=Nuevo');
    }

    //Método que modifica el modelo de un alumno.
    public function Editar(){
        $alu = new alumno();

        $alu->id_alumno = $_REQUEST['id_alumno'];
        $alu->nombres_a = $_REQUEST['nombres_a'];
        $alu->a_paternoa = $_REQUEST['a_paternoa'];
        $alu->a_maternoa = $_REQUEST['a_maternoa'];
        $alu->sexo = $_REQUEST['sexo'];
        $alu->rut_a = $_REQUEST['rut_a'];
        $alu->fech_nacimiento = $_REQUEST['fech_nacimiento'];
        $alu->direccion_a = $_REQUEST['direccion_a'];
        $alu->comuna_a = $_REQUEST['comuna_a'];

        $this->model->Actualizar($alu);
        //echo("<script>console.log('PHP: ".json_encode($alu)."');</script>"); 
        
        header('Location: index.php?c=alumno');
    }

    //Método que elimina la tupla alumno con el id dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_alumno']);
        header('Location: index.php?c=alumno');
    }
}

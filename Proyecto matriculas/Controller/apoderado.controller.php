<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/apoderado.php';

class ApoderadoController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new apoderado();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/apoderado/apoderado.php';
        require_once 'view/footer.php';
    }

    //Llamado a la vista apoderado-editar
    public function Crud(){
        $apo = new apoderado();

        //Se obtienen los datos del apoderado a editar.
        if(isset($_REQUEST['id_apoderado'])){
            $apo = $this->model->Obtener($_REQUEST['id_apoderado']);
        }

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/apoderado/apoderado-editar.php';
        require_once 'view/footer.php';
  }

    //Llamado a la vista apoderado-nuevo
    public function Nuevo(){
        $apo = new apoderado();

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/apoderado/apoderado-nuevo.php';
        require_once 'view/footer.php';
    }

    //Método que registrar al modelo un nuevo apoderado.
    public function Guardar(){
        $apo = new apoderado();

        //Captura de los datos del formulario (vista).
        $apo->nombres_a = $_REQUEST['nombres_a'];
        $apo->a_paternoa = $_REQUEST['a_paternoa'];
        $apo->a_maternoa = $_REQUEST['a_maternoa'];
        $apo->sexo = $_REQUEST['sexo'];
        $apo->rut_a = $_REQUEST['rut_a'];
        $apo->fech_nacimiento = $_REQUEST['fech_nacimiento'];
        $apo->direccion_a = $_REQUEST['direccion_a'];
        $apo->comuna_a = $_REQUEST['comuna_a'];

        //Registro al modelo apoderado.
        $this->model->Registrar($apo);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: index.php?c=apoderado');
    }

    //Método que modifica el modelo de un apoderado.
    public function Editar(){
        $apo = new apoderado();

        $apo->id_apoderado = $_REQUEST['id_apoderado'];
        $apo->nombres_a = $_REQUEST['nombres_a'];
        $apo->a_paternoa = $_REQUEST['a_paternoa'];
        $apo->a_maternoa = $_REQUEST['a_maternoa'];
        $apo->sexo = $_REQUEST['sexo'];
        $apo->rut_a = $_REQUEST['rut_a'];
        $apo->fech_nacimiento = $_REQUEST['fech_nacimiento'];
        $apo->direccion_a = $_REQUEST['direccion_a'];
        $apo->comuna_a = $_REQUEST['comuna_a'];

        $this->model->Actualizar($apo);
        //echo("<script>console.log('PHP: ".json_encode($apo)."');</script>"); 
        
        header('Location: index.php?c=apoderado');
    }

    //Método que elimina la tupla apoderado con el id dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_apoderado']);
        header('Location: index.php?c=apoderado');
    }
}

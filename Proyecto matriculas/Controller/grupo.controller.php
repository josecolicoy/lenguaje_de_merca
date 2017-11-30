<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/grupo.php';

class grupoController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new grupo();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/grupo/grupo.php';
        require_once 'view/footer.php';
    }

    //Llamado a la vista grupo-editar
    public function Crud(){
        $grup = new grupo();

        //Se obtienen los datos del grupo a editar.
        if(isset($_REQUEST['id_grupo'])){
            $grup = $this->model->Obtener($_REQUEST['id_grupo']);
        }

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/grupo/grupo-editar.php';
        require_once 'view/footer.php';
  }

    //Llamado a la vista grupo-nuevo
    public function Nuevo(){
        $grup = new grupo();

        //Llamado de las vistas.
        require_once 'view/header.php';
        require_once 'view/grupo/grupo-nuevo.php';
        require_once 'view/footer.php';
    }

    //Método que registrar al modelo un nuevo grupo.
    public function Guardar(){
        $grup = new grupo();

        //Captura de los datos del formulario (vista).
        $grup->num_grupo = $_REQUEST['num_grupo'];
        $grup->comparte_hogar = $_REQUEST['comparte_hogar'];
        $grup->renta = $_REQUEST['renta'];
        $grup->renta_familiar = $_REQUEST['renta_familiar'];
        $grup->beneficio_estado = $_REQUEST['beneficio_estado'];
        $grup->id_padre = $_REQUEST['id_padre'];

        //Registro al modelo grupo.
        $this->model->Registrar($grup);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: index.php?c=grupo');
    }

    //Método que modifica el modelo de un grupo.
    public function Editar(){
        $grup = new grupo();
        $grup->num_grupo = $_REQUEST['num_grupo'];
        $grup->comparte_hogar = $_REQUEST['comparte_hogar'];
        $grup->renta = $_REQUEST['renta'];
        $grup->renta_familiar = $_REQUEST['renta_familiar'];
        $grup->beneficio_estado = $_REQUEST['beneficio_estado'];
        $grup->id_padre = $_REQUEST['id_padre'];
        $grup->id_grupo = $_REQUEST['id_grupo'];
        

        $this->model->Actualizar($grup);
        //echo("<script>console.log('PHP: ".json_encode($grup)."');</script>"); 
        
        header('Location: index.php?c=grupo');
    }

    //Método que elimina la tupla grupo con el id dado.
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_grupo']);
        header('Location: index.php?c=grupo');
    }
}

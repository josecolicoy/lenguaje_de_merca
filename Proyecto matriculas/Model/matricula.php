<?php
class matricula
{
    //Atributo para conexión a SGBD
    private $pdo;

    //Atributos del objeto padre
    public $id_matricula;
    public $fecha;
    public $nombres_a;
    public $a_paternoa;
    public $a_maternoa;
    public $rut_a;
    public $nombre_curso;


    //Método de conexión a SGBD.
    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = Database::Conectar();
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    //Este método selecciona todas las tuplas de la tabla
    //padre en caso de error se muestra por pantalla.
    public function Listar()
    {
        try
        {
            $result = array();
            //Sentencia SQL para selección de datos.
            $stm = $this->pdo->prepare("SELECT matricula.id_matricula, matricula.fecha, alumno.nombres_a, alumno.a_paternoa,alumno.a_maternoa,alumno.rut_a,curso.nombre_curso FROM alumno inner join matricula on alumno.id_alumno=matricula.id_alumno inner join curso on curso.id_curso=matricula.id_curso");
            //Ejecución de la sentencia SQL.
            $stm->execute();
            //fetchAll — Devuelve un array que contiene todas las filas del conjunto
            //de resultados
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
        catch(Exception $e)
        {
            //Obtener mensaje de error.
            die($e->getMessage());
        }
    }

    //Este método obtiene los datos del alumno a partir del id
    //utilizando SQL.
    public function Obtener($id_matricula)
    {
        try
        {
            //Sentencia SQL para selección de datos utilizando
            //la clausula Where para especificar el id del alumno.
            $stm = $this->pdo->prepare("SELECT * FROM matricula WHERE id_matricula = ?");
            //Ejecución de la sentencia SQL utilizando el parámetro id.
            $stm->execute(array($id_matricula));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    //Este método elimina la tupla alumno dado un id.
    public function Eliminar($id_matricula)
    {
        try
        {
            //Sentencia SQL para eliminar una tupla utilizando
            //la clausula Where.
            $stm = $this->pdo
                        ->prepare("DELETE FROM matricula WHERE id_matricula = ?");

            $stm->execute(array($id_matricula));
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    //Método que actualiza una tupla a partir de la clausula
    //Where y el id del alumno.
    public function Actualizar($data)
    {
        try
        {
            //Sentencia SQL para actualizar los datos.
            $sql = "UPDATE matricula SET
                        fecha        = ?,
                        id_curso      = ?,
                        id_alumno      = ?,
                        WHERE id_matricula = ?";
            //Ejecución de la sentencia a partir de un arreglo.
            $this->pdo->prepare($sql)
                 ->execute(
                    array(
                        $data->fecha,
                        $data->id_curso,
                        $data->id_alumno,
                        $data->id_matricula,
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    //Método que registra un nuevo alumno a la tabla.
    public function Registrar( $data)
    {
        try
        {
            //Sentencia SQL.
            $sql = "INSERT INTO matricula (fecha,id_curso,id_alumno)
                VALUES (?, ?, ?)";

            $this->pdo->prepare($sql)
             ->execute(
                array(
                        $data->fecha,
                        $data->id_curso,
                        $data->id_alumno,
                )
            );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }
}

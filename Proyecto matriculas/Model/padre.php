<?php
class padre
{
	//Atributo para conexión a SGBD
	private $pdo;

	//Atributos del objeto padre
    public $id_padre;
    public $nombres;
    public $a_paterno;
    public $a_materno;
    public $rut;
    public $telefono;
    public $genero;
    public $escolaridad;
    public $actividad;
    public $id_alumno;

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
			$stm = $this->pdo->prepare("SELECT * FROM `alumno` INNER JOIN padre ON alumno.id_alumno=padre.id_alumno");
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
	public function Obtener($id_padre)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el id del alumno.
			$stm = $this->pdo->prepare("SELECT * FROM padre WHERE id_padre = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro id.
			$stm->execute(array($id_padre));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla alumno dado un id.
	public function Eliminar($id_padre)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM padre WHERE id_padre = ?");

			$stm->execute(array($id_padre));
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
			$sql = "UPDATE padre SET
						nombres_p        = ?,
						a_paternop      = ?,
						a_maternop      = ?,
						rut_p          = ?,
						telefono       = ?,
						genero         = ?,
						escolaridad    = ?,
						actividad      = ?,
						id_alumno      =?
						WHERE id_padre = ?";
			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombres_p,
                        $data->a_paternop,
                        $data->a_maternop,
                        $data->rut_p,
                        $data->telefono,
                        $data->genero,
                        $data->escolaridad,
                        $data->actividad,
                        $data->id_alumno,
                        $data->id_padre
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
			$sql = "INSERT INTO padre (nombres_p,a_paternop,a_maternop,rut_p,telefono,genero,escolaridad,actividad,id_alumno)
		        VALUES (?, ?, ?, ?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                        $data->nombres_p,
                        $data->a_paternop,
                        $data->a_maternop,
                        $data->rut_p,
                        $data->telefono,
                        $data->genero,
                        $data->escolaridad,
                        $data->actividad,
                        $data->id_alumno
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

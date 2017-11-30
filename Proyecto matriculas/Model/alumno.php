<?php
class alumno
{
	//Atributo para conexión a SGBD
	private $pdo;

	//Atributos del objeto alumno
    public $id_alumno;
    public $nombres;
    public $a_paternoa;
    public $a_maternoa;
    public $rut_a;
    public $sexo;
    public $fech_nacimiento;
    public $direccion_a;
    public $comuna_a;

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
	//alumno en caso de error se muestra por pantalla.
	public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM alumno");
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
	public function Obtener($id_alumno)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el id del alumno.
			$stm = $this->pdo->prepare("SELECT * FROM alumno WHERE id_alumno = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro id.
			$stm->execute(array($id_alumno));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla alumno dado un id.
	public function Eliminar($id_alumno)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM alumno WHERE id_alumno = ?");

			$stm->execute(array($id_alumno));
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
			$sql = "UPDATE alumno SET
						nombres_a          = ?,
						a_paternoa        = ?,
            			a_maternoa        = ?,
            			rut_a  			 = ?,
            			sexo 			 = ?,
            			fech_nacimiento  = ?,
            			direccion_a        = ?,
            			comuna_a           = ?
				    WHERE id_alumno = ?";

			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombres_a,
                        $data->a_paternoa,
                        $data->a_maternoa,
                        $data->rut_a,
                        $data->sexo,
                        $data->fech_nacimiento,
                        $data->direccion_a,
                        $data->comuna_a,
                        $data->id_alumno
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
			$sql = "INSERT INTO alumno (nombres_a,a_paternoa,a_maternoa,rut_a,sexo,fech_nacimiento,direccion_a,comuna_a)
		        VALUES (?, ?, ?, ?,?,?,?,?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
						$data->nombres_a,
						$data->a_paternoa,
						$data->a_maternoa,
						$data->rut_a,
						$data->sexo,
						$data->fech_nacimiento,
						$data->direccion_a,
						$data->comuna_a
                )
			);
		    echo("<script>console.log('PHP: ".json_encode($this->pdo)."');</script>"); 
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

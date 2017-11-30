<?php
class apoderado
{
	//Atributo para conexión a SGBD
	private $pdo;

	//Atributos del objeto apoderado
    public $id_apoderado;
    public $nombres;
    public $a_paterno;
    public $a_materno;
    public $rut_ap;
    public $parentesco;
    public $fech_nacap;
    public $telefono_ap;
    public $tipo;
    public $id_grupo;
    public $direccion;
    public $comuna;
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
	//apoderado en caso de error se muestra por pantalla.
	public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM `apoderado`  INNER JOIN alumno ON alumno.id_alumno=apoderado.id_alumno");
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

	//Este método obtiene los datos del apoderado a partir del id
	//utilizando SQL.
	public function Obtener($id_apoderado)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el id del apoderado.
			$stm = $this->pdo->prepare("SELECT * FROM apoderado WHERE id_apoderado = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro id.
			$stm->execute(array($id_apoderado));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla apoderado dado un id.
	public function Eliminar($id_apoderado)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM apoderado WHERE id_apoderado = ?");

			$stm->execute(array($id_apoderado));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el id del apoderado.
	public function Actualizar($data)
	{	
		try
		{
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE apoderado SET
							nombres      =?,
							a.paterno    =?,
							a.materno    =?,
							rut_ap       =?,
							parentesco   =?,
							fecha_nacap  =?,
							telefono_ap  =?,
							tipo         =?,
							id_grupo     =?,
							direccion    =?,
							comuna       =?,
							id_alumno    =?
				    WHERE id_apoderado = ?";

			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombres,
                        $data->a_paterno,
                        $data->a_materno,
                        $data->rut_ap,
                        $data->parentesco,
                        $data->fecha_nacap,
                        $data->telefono_ap,
                        $data->tipo,
                        $data->id_grupo,
                        $data->direccion,
                        $data->comuna,
                        $data->id_alumno,
                        $data->id_apoderado
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que registra un nuevo apoderado a la tabla.
	public function Registrar( $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO apoderado (id_apoderado, nombres, a.paterno, a.materno, rut_ap, parentesco, fecha_nacap, telefono_ap, tipo, id_grupo, direccion, comuna, id_alumno)
		        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                        $data->nombres,
                        $data->a_paterno,
                        $data->a_materno,
                        $data->rut_ap,
                        $data->parentesco,
                        $data->fecha_nacap,
                        $data->telefono_ap,
                        $data->tipo,
                        $data->id_grupo,
                        $data->direccion,
                        $data->comuna,
                        $data->id_alumno
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

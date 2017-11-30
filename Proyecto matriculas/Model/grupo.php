<?php
class grupo
{
	//Atributo para conexión a SGBD
	private $pdo;

	//Atributos del objeto grupo
    public $id_grupo;
    public $num_grupo;
    public $comparte_hogar;
    public $renta;
    public $renta_familiar;
    public $beneficio_estado;
    public $id_padre;

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
	//grupo en caso de error se muestra por pantalla.
	public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM `grupo_familiar` 
			INNER JOIN padre ON padre.id_padre=grupo_familiar.id_padre
			INNER JOIN alumno ON alumno.id_alumno=padre.id_alumno");
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

	//Este método obtiene los datos del grupo a partir del id
	//utilizando SQL.
	public function Obtener($id_grupo)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el id del grupo.
			$stm = $this->pdo->prepare("SELECT * FROM grupo_familiar WHERE id_grupo = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro id.
			$stm->execute(array($id_grupo));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Este método elimina la tupla grupo dado un id.
	public function Eliminar($id_grupo)
	{
		try
		{
			//Sentencia SQL para eliminar una tupla utilizando
			//la clausula Where.
			$stm = $this->pdo
			            ->prepare("DELETE FROM grupo_familiar WHERE id_grupo = ?");

			$stm->execute(array($id_grupo));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el id del grupo.
	public function Actualizar($data)
	{	
		try
		{
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE grupo_familiar SET
						num_grupo        = ?,
						comparte_hogar   = ?,
						renta            = ?,
						renta_familiar   = ?,
						beneficio_estado = ?,
						id_padre         = ?
				    WHERE id_grupo = ?";

			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->num_grupo,
                        $data->comparte_hogar,
                        $data->renta,
                        $data->renta_familiar,
                        $data->beneficio_estado,
                        $data->id_padre,
                        $data->id_grupo
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que registra un nuevo grupo a la tabla.
	public function Registrar( $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO grupo (id_grupo, num_grupo, comparte_hogar, renta, renta_familiar, beneficio_estado, id_padre)
		        VALUES (?,?,?,?,?,?,?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                        $data->num_grupo,
                        $data->comparte_hogar,
                        $data->renta,
                        $data->renta_familiar,
                        $data->beneficio_estado,
                        $data->id_padre
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}

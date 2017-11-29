<?php
class listar
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto alumno
    public $id_alumno;
    public $nombres_a;
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
	//alumno en caso de error se muestra por pantalla



	public function Lista()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT alumno.id_alumno,alumno.nombres_a,alumno.a_paternoa,alumno.a_maternoa,alumno.rut_a,curso.nombre_curso FROM alumno inner join matricula on alumno.id_alumno=matricula.id_alumno inner join curso on curso.id_curso=matricula.id_curso");
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
			$stm->execute(array($nit));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

}

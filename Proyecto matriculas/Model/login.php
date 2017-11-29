<?php
class login
{
	//Atributo para conexión a SGBD
	private $pdo;



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
	//proveedor en caso de error se muestra por pantalla.
	public function Logear($user,$pass)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el nit del proveedor.
			$stm = $this->pdo->prepare("SELECT * FROM usuario WHERE name = ? AND pass = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro nit.
			$stm->execute(array($user,$pass));
			return $stm->fetch();
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}


}

<?php
class Congreso
{
	private $pdo;

	public function __CONSTRUCT()
	{
		
		try
		{
			$this->pdo = Db::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ConsultarProvincia()
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM provincia");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Consultar_Suscrito_Congreso($id)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT b.ID_usuario,Nombre,Apellido,Cedula,Sexo,Opupacion,Tipo_Ticket,a.Hora_Entrada,a.Hora_Salida ,   a.Fecha  FROM congreso.asistencia as a, congreso.usuario as b where a.ID_Conferencia=? and   a.ID_Usuario=b.ID_usuario ;");
			$stm->execute(array($id));
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
      
	public function Consultar_Suscrito_INFO($id)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT Nombre,Apellido,Cedula,Sexo,Opupacion,Tipo_Ticket,a.Hora_Entrada,a.Hora_Salida ,  a.Fecha FROM congreso.asistencia as a, congreso.usuario as b where a.ID_Conferencia=? and   a.ID_Usuario=b.ID_usuario;");
			$stm->execute(array($id));
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

}



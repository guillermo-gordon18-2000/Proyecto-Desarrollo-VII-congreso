
<?php
@session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
?>
<?php
require_once 'db.php';
//require_once 'db-o.php';

class Usuario
{
	private $pdo;
	private $msg;
    public $IDusuario;
    public $nombre;
    public $apellido;  
    public $email;
    public $pass;
    Public $Empresa;
	Public $Conferencia;
	Public $Cedula;
	Public $Dia;
	Public $confe;

	Public $Contra_0;
	Public $Contra_1;
	Public $Contra_2;


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


	public function Registrar(usuario $data)
	{
		try 
		{
		$sql = "INSERT INTO usuario (nombre,apellido,email,Contraseña) 
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array( 
                    $data->nombre,
                    $data->apellido, 
                    $data->email, 
                    $data->pass
                )
			);
		$this->msg="Su registro se ha guardado exitosamente!&t=text-success";
		} catch (Exception $e) 
		{
			if ($e->errorInfo[1] == 1062) { // error 1062 es de duplicación de datos 
				$this->msg="Correo electrónico ya está registrado en el sistema&t=text-danger";
			 } else {
				$this->msg="Error al guardar los datos&t=text-danger";
			 }
		}
		return $this->msg;
	}

	public function Consultar(usuario $data)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM  congreso.staff WHERE Correo = ? AND Contraseña=?");
			$stm->execute(array($data->email, $data->pass));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
    
	
	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM staff WHERE id= ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Obtener_Sub($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * From usuario where  Cedula=?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	
	public function Obtener_Staff($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * From staff where  Cedula=?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Obtener_listaconferencia()
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM conferencia");   
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	

	public function Obtener_Subcriptores()
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM usuario");   
			$stm->execute();
			return $stm->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Obtener_INFO_Subcriptores($id)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM congreso.asistencia where  asistencia.ID_Usuario=?" );
			  
			$stm->execute(array($id));
			return $stm->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
       
	public function Obtener_INFO_Subcriptores_sexo($id,$id_c)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM congreso.asistencia where  asistencia.ID_Usuario=? and asistencia.id_conferencia=?" );
			  
			$stm->execute(array($id,$id_c));
			return $stm->fetchALL(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
	public function Lista_Num_Conferencia($id)
	{
		try 
		{                           //
			$stm = $this->pdo->prepare("CALL Lista_Num_Conferencia_2(?)");   
			$stm->execute(array($id));
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function asisitencia_Lits(usuario $data)
	{
		try 
		{                           //
			$stm = $this->pdo->prepare("SELECT Nombre,Apellido,b.Cedula,Sexo,Opupacion,Tipo_Ticket,a.Hora_Entrada,a.Hora_Salida ,  a.Fecha ,a.ID_asistencia FROM congreso.asistencia as a, congreso.usuario as b where a.ID_Conferencia=? and   b.Cedula=? and a.ID_usuario=b.ID_usuario and a.Fecha=?");   
			$stm->execute(array($data->Conferencia, $data->Cedula, $data->Dia ));
			
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	
	public function Insertar_Asistencia_LTS(usuario $data)
	{
		try 
		{                           //
			$stm = $this->pdo->prepare("INSERT INTO `congreso`.`asistencia`(`ID_Usuario`,`Fecha`,`Hora_Entrada`,`Hora_Salida`,`ID_Conferencia`)VALUES(?,?,'10:00','--|--',?)");   
			$stm->execute(array($data->IDusuario, $data->Dia, $data->Conferencia ));
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	public function Insertar_Asistencia_PTS(usuario $data)
	{
		try 
		{                           //
			$stm = $this->pdo->prepare("UPDATE `congreso`.`asistencia` SET `Hora_Salida` = '12:00' WHERE `ID_asistencia` = ?");   
			$stm->execute(array($data->ID_Asistencia));
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
	public function Insertar_STAFF_LTS(usuario $data)
	{
		try 
		{                           //
			$stm = $this->pdo->prepare("
			INSERT INTO `congreso`.`staff`(`nombre`,`apellido`,`Cedula`,`Fecha-Nacimiento`,`Correo`,`Sexo`,`ID_Conferencia`,`Nivel`,`Contraseña`)VALUES(?,?,?,'0000-00-00',?,?,?,?,?);");   
			$stm->execute(array(      $data->nombre, $data->apellido ,$data->Cedula ,$data->Correo ,$data->sexo,$data->conferencia ,$data->nivel,$data->contraseña   ));
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
    public function ObtenerTodosLosUsuarios($id)
	{
		try 
		{
			$stm = $this->pdo->prepare("SELECT * FROM staff  where ID_Conferencia = ?");   
			$stm->execute(array($id));
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	

	public function Insertar_Asistencia_Confere(usuario $data)
	{
		try 
		{                           //
			$stm = $this->pdo->prepare("INSERT INTO `congreso`.`conferencia`(`empresa`,`ubicacion`,`conferencista`,`secciones`,`tema`)VALUES(?,?,?,?,?);");   
			$stm->execute(array($data->Empresa, $data->Ubiacion, $data->Conferencista, $data->Seccion,$data->Tema  ));
			
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}


	public function Actualizar(usuario $data)
	{
		try 
		{
		$sql = "UPDATE staff SET nombre = ?,apellido= ?, Foto= ? 
		        WHERE id = ?";

		$this->pdo->prepare($sql)
		     ->execute(
				array( 
                    $data->nombre,
                    $data->apellido, 
                    $data->foto,
					$data->id
                )
			);
		$this->msg="Su registro se ha Actualizado exitosamente!&t=text-success";
		} catch (Exception $e) 
		{
			$this->msg="Error al actualizar los datos&t=text-danger";

		}
		return $this->msg;
	}



}



<?php

class Controller
{
 
    public function index(){

        //Le paso los datos a la vista
        require("View/Login.php");

    }

    public function crearUsuario(){

        require("View/CrearUsuario.php");

    }

   //------------Vista de DashBoard
    public function Mainvista(){

        require("View/Main.php");

    }
     
 //------------Vista de Analiticas
     public function VistaAnalitica(){

        require("View/Analytics.html");

    }
     
 //------------Vista de Reporte
     public function VistaReporte(){

        require("View/Report.html");

    }
//------------Vista de Ajustes
     public function VistaSettings(){

        require("View/Settings.html");

    }

    //------------Vista de LoggOut
     public function VistaLoggOut(){

        require("View/Login.php");

    }


 //   public function getConection(){
	//	$dbObj = new Db();
		//$this->conection = $dbObj->conection;
//s	}


public function Ingresar(){
     $nombre;
      $password;
    
    
   $nombre = $_REQUEST['Usuario'];  
    $password = ($_REQUEST['Pasword']);    

    //Verificamos si existe en la base de datos
    if ($password=="1234")
    {
        $_SESSION["acceso"] = true;
        $_SESSION["user"] = $resultado->nombre." ".$resultado->apellido;
        header('Location: ?op=dash');

    }
    else
    {
        header('Location: ?&msg=Su contraseña o usuario está incorrecto');
    }

    


}

}



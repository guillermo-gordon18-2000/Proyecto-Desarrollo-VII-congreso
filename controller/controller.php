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

        require("View/Analytics.php");

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


}



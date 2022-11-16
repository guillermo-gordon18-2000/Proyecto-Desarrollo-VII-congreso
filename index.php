
<?php
/*Guillermo Gordon 8-95-2011 */
/* Set conection */

//Incluyo los archivos necesarios
require_once 'Model/db.php';
require("controller/controller.php");

 

//Instancio el controlador
$controller = new Controller;

//Decido la ruta en función de los elementos del array
if (isset($_GET['op'])){ //

    $opcion=$_GET['op'];

    if ($opcion=="crear")
    {
    //Llamo al método ver pasándole la clave que me están pidiendo
    $controller->crearUsuario();
    }else if($opcion=="permitido"){
 $controller->IngresarPanel();
        
       

    }else if($opcion=="dash"){
        $controller->IngresarPanel();
       

    }else if($opcion=="Analit"){
        $controller->VistaAnalitica();

    }else if($opcion=="report"){
        $controller->VistaReporte();

    }elseif ($opcion=="acceder"){
        //Llamo al método ver pasándole la clave que me están pidiendo
        $controller->Ingresar();
     }elseif ($opcion=="actualizar"){

        //Llamo al método ver pasándole la clave que me están pidiendo
    
        $controller->ActualizarDatos();
       
    }else if($opcion=="Setting"){
        $controller->VistaSettings();

    }else if($opcion=="Logg"){
        $controller->index();

    }
}
else{

    //Llamo al método por defecto del controlador
   // $controller->index();
        $controller->index();
}
?>

<?php
/*Guillermo Gordon 8-95-2011 */
/* Set conection */

//Incluyo los archivos necesarios
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
    }else if($opcion=="dash"){
        $controller->Mainvista();

    }else if($opcion=="Analit"){
        $controller->VistaAnalitica();

    }else if($opcion=="report"){
        $controller->VistaReporte();

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
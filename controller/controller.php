
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
?>
<?php

session_start();
require_once 'Model/ubicacion.php';
require_once 'Model/usuario.php';
class Controller
{
 private $model;
 private $model2;
 private $model3;
 private $model4;
 private $model4_conferencia;
 private $model4_NUm_conferencia;


 private $model__Subcriptores;
 private $model__Subcriptores_ST;
 private $resp;
    
    public function __CONSTRUCT(){
        $this->model = new Usuario();
        $this->model2 = new Ubicacion();
         $this->model3 = new Ubicacion();
         $this->model4 = new Usuario();

         $this->model4_conferencia = new Usuario();
         $this->model4_NUm_conferencia = new Usuario();


         $this->model__Subcriptores = new Usuario();
         $this->model__Subcriptores_ST = new Usuario();
    }    

    public function index(){

        //Le paso los datos a la vista
        require("view/Login.php");

    }

    public function Mainvista(){

        require("view/Main.php");

    }


    public function VistaAnalitica(){

      
        $lista_conferencia = new Usuario();
        $lista_conferencia = $this->model4_conferencia->Obtener_listaconferencia();

        $model4_Num  = new Usuario();
        $model4_Num = $this->model4_NUm_conferencia->Lista_Num_Conferencia(4);
        require("view/Analytics.php");
    }

    public function VistaReporte(){
          

        $Subcriptores = new Usuario();
        $Subcriptores = $this->model__Subcriptores->Obtener_Subcriptores();


        $Subcriptores_Info = new Usuario();
        $Subcriptores_Info = $this->model__Subcriptores_ST->Obtener_INFO_Subcriptores(1);
        
        
        $lista_conferencia = new Usuario();
        $lista_conferencia = $this->model4_conferencia->Obtener_listaconferencia();

        require("view/Report.php");

    }

    
    public function VistaSettings(){

        $usuario = new Usuario();
        $usuario = $this->model->Obtener($_SESSION['id']);
          
        $listaUsuario = new Usuario();
        $listaUsuario = $this->model4->ObtenerTodosLosUsuarios( $_SESSION["CNFE"] );
        
        require("view/Settings.php");

    }




    public function crearUsuario(){

        require("view/CrearUsuario.php");

    }


    public function VistaLoggOut(){

        require("View/Login.php");

    }
      

         

    public function IngresarPanel(){
           
        $listaUsuario = new Usuario();
        $listaUsuario = $this->model4->ObtenerTodosLosUsuarios( $_SESSION["CNFE"] );
        
        $lista_conferencia = new Usuario();
        $lista_conferencia = $this->model4_conferencia->Obtener_listaconferencia();

        $usuario = new Usuario();
        $usuario = $this->model->Obtener($_SESSION['id']);

        

       // $provincia =new Ubicacion();
       // $provincia= $this->model2->ConsultarProvincia();

       // $distritos =new Ubicacion();
      //  $distritos= $this->model3->ConsultarDistrito();

         require("view/Main.php");
        //   require("view/panel/dashboard.php");
    }

    public function IngresarPerfil(){

        //require("view/panel/profile.php");
    }


    public function Guardar(){
        $usuario = new Usuario();
        
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido = $_REQUEST['apellido'];
        $usuario->email = $_REQUEST['correo'];  
        $usuario->pass = md5($_REQUEST['Pasword1']);    
        $usuario->foto = "user.png"; 
        $this->resp= $this->model->Registrar($usuario);

        header('Location: ?op=crear&msg='.$this->resp);
    }

    public function Ingresar(){
        $ingresarUsuario = new Usuario();
        
        $ingresarUsuario->email = $_REQUEST['correo'];  
        $ingresarUsuario->pass = md5($_REQUEST['password']);    

        //Verificamos si existe en la base de datos
        if ($resultado = $this->model->Consultar($ingresarUsuario))
        {
                 
            $_SESSION["acceso"] = true;
            $_SESSION["foto"] = $resultado->Foto;
            $_SESSION["id"] = $resultado->id;
            $_SESSION["Nivel"] = $resultado->Nivel;
            $_SESSION["CNFE"] = $resultado->ID_Conferencia;
           // $_SESSION["acceso"] = true;
            //$_SESSION["ID"] = true;
            $_SESSION["user"] = $resultado->nombre." ".$resultado->apellido;
           
 
            if($_SESSION["Nivel"] == 2 or $_SESSION["Nivel"] == 3 ){
                header('Location: ?op=report');
            }else{
                header('Location: ?op=permitido');
            }

        }
        else
        {
            header('Location: ?&msg=Su contraseña o usuario está incorrecto');
        }

        


    }

    public function ActualizarDatos(){
        
       

        $usuario = new Usuario();
        $usuario->nombre = $_REQUEST['nombre'];
        $usuario->apellido = $_REQUEST['apellido'];
        $usuario->id=$_SESSION["id"];


        if (isset($_FILES['foto']))
        {
            move_uploaded_file($_FILES['foto']['tmp_name'], "./Public/images/users/".$_SESSION["id"].".jpg");
            
            $usuario->foto = $_SESSION["id"].".jpg";

            $_SESSION["foto"]=$_SESSION["id"].".jpg";
        }
        else
        {
            $usuario->foto = $_SESSION["foto"];
        }
         
        
        $this->resp= $this->model->Actualizar($usuario);

        header('Location: ?op=permitido&msg='.$this->resp);
    }
 

}



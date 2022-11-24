

<?php


require_once 'Model/Congreso.php';
require_once 'Model/usuario.php';


class Controller
{
public $qr;

 private $model;
 private $model2;
 private $model3;
 private $model4;
 private $model4_conferencia;
 private $model4_NUm_conferencia;


 private $model__Subcriptores;
 private $model__Subcriptores_ST;

 private $model__Subcriptores_US;
 private $model__Subcriptores_US_INFO;

 private $model__asistencia;

 private $model__asistencia_insert;
 private $model__asistencia_MODI;
 private $resp;
    
    public function __CONSTRUCT(){
     
        $this->model = new Usuario();
        $this->model2 = new Congreso();
         $this->model3 = new Congreso();
         $this->model4 = new Usuario();

         $this->model4_conferencia = new Usuario();
         $this->model4_NUm_conferencia = new Usuario();

        
         $this->model__Subcriptores = new Usuario();
         $this->model__Subcriptores_ST = new Usuario();
         $this->model__asistencia = new Usuario();
         $this->model__asistencia_insert= new Usuario();
         $this->model__asistencia_MODI= new Usuario();

         $this->model__Subcriptores_US = new  Congreso();
    }    

    public function index(){

        //Le paso los datos a la vista
        require("view/Login.php");

    }

    public function Mainvista(){
            
        $Subcriptores = new Usuario();
        $Subcriptores = $this->model__Subcriptores->Obtener_Subcriptores();

        require("view/Main.php");

    }


    public function VistaAnalitica(){
           
      
        $lista_conferencia = new Usuario();
        $lista_conferencia = $this->model4_conferencia->Obtener_listaconferencia();
        
        
        $lista_conferencia_G = new Usuario();
        $lista_conferencia_G = $this->model4_conferencia->Obtener_listaconferencia();

        $model4_Num  = new Usuario();
        $model4_Num = $this->model4_NUm_conferencia->Lista_Num_Conferencia(4);
        require("view/Analytics.php");
    }

    public function VistaReporte(){
          
         $usuario = new Usuario();
         $usuario = $this->model->Obtener($_SESSION['id']);

        $Subcriptores = new Usuario();
        $Subcriptores = $this->model__Subcriptores->Obtener_Subcriptores();


        $Subcriptores_Info = new Usuario();
        $Subcriptores_Info = $this->model__Subcriptores_ST->Obtener_INFO_Subcriptores(1);
        
        
        $lista_conferencia = new Usuario();
        $lista_conferencia = $this->model4_conferencia->Obtener_listaconferencia();
      


        $lista_SUS_U = new Congreso();
        $lista_SUS_U = $this->model__Subcriptores_US->Consultar_Suscrito_Congreso($_SESSION["CNFE"]);


        require("view/Report.php");

    }

    
    public function VistaSettings(){

       
          
        $listaUsuario = new Usuario();
        $listaUsuario = $this->model4->ObtenerTodosLosUsuarios( $_SESSION["CNFE"] );

         $usuario = new Usuario();
         $usuario = $this->model->Obtener($_SESSION['id']);
        require("view/Settings-45.php");


    }




    public function crearUsuario(){

        require("view/CrearUsuario.php");

    }


    public function VistaLoggOut(){

        require("View/Login.php");

    }
      

         

    public function IngresarPanel(){
        
       
        $Subcriptores_Info = new Usuario();
        $Subcriptores_Info = $this->model__Subcriptores_ST->Obtener_INFO_Subcriptores(1);

        $Subcriptores = new Usuario();
        $Subcriptores = $this->model__Subcriptores->Obtener_Subcriptores();   

        $listaUsuario = new Usuario();
        $listaUsuario = $this->model4->ObtenerTodosLosUsuarios($_SESSION["CNFE"] );
        
        $lista_conferencia = new Usuario();
        $lista_conferencia = $this->model4_conferencia->Obtener_listaconferencia();
           
        
        $lista_conferencia_G = new Usuario();
        $lista_conferencia_G = $this->model4_conferencia->Obtener_listaconferencia();

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
           
 
            if($_SESSION["Nivel"] == 2 or $_SESSION["Nivel"] == 3 or  $_SESSION["Nivel"] == 1  ){
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

        header('Location: ?op=Setting&msg='.$this->resp);
    }


    
    public function Actualizar_Contraseña(){
       
        $usuario = new Usuario();
        $usuario->Contra_0 = $_REQUEST['nombre'];
        $usuario->Contra_1 = $_REQUEST['apellido'];
        $usuario->Contra_2 = $_REQUEST['apellido'];
        $usuario->id=$_SESSION["id"];


        
      

        header('Location: ?op=Setting&msg='.$this->resp);
    }

    
    public function Guardar_Asistencia(){
        $usuario_asistencia  = new Usuario();
       
        
        $usuario_asistencia->Cedula =      $_REQUEST['Cedula'];
        $usuario_asistencia->Dia =         $_REQUEST['Dia'];
        $usuario_asistencia->Conferencia = $_SESSION["CNFE"] ;
       
             if($resp= $this->model__asistencia->asisitencia_Lits($usuario_asistencia)){
                   //MODIFICAR REGISTRO


                   if($usuario_w= $this->model->Obtener_Sub($usuario_asistencia->Cedula)){
                    
                    $model__asistencia_MODI  = new Usuario();
                    $model__asistencia_MODI->ID_Asistencia=$resp->ID_asistencia;
                    
                     $this->resp_ALTER= $this->model__asistencia_MODI->Insertar_Asistencia_PTS($model__asistencia_MODI);
                      header('Location: ?op=report&msg=Asistencia MODIFICADA'.$resp->ID_asistencia);
                   //  $model__asistencia_MODI
                  } 

                  
             }else
             {
                  
              
                  if($usuario_w= $this->model->Obtener_Sub($usuario_asistencia->Cedula)){
                    
                    $model__asistencia_insert  = new Usuario();
                     $model__asistencia_insert->IDusuario=$usuario_w->ID_usuario;
                     $model__asistencia_insert->Dia= $usuario_asistencia->Dia;
                     $model__asistencia_insert->Conferencia = $usuario_asistencia->Conferencia;
                     $this->resp_INSERT= $this->model__asistencia_insert->Insertar_Asistencia_LTS($model__asistencia_insert);
                     header('Location: ?op=report&msg=Asistencia Creada');
                  }               
                 // CREAR REGISTRO
             }       
        //$this->resp= $this->model->Registrar($usuario);

        
    }
 

}





<?php
@session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'public/phpmailer/src/Exception.php';
require 'public/phpmailer/src/PHPMailer.php';
require 'public/phpmailer/src/SMTP.php';

require_once 'Model/Congreso.php';
require_once 'Model/usuario.php';
require_once 'config/config.php';

include("Model/firebaseRDB.php");


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
 private $model__Subcriptores_SETX;
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



    public function UPDATE_FIREBASE(){
      
        
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

        $Subcriptores = new Usuario();
        $Subcriptores = $this->model__Subcriptores->Obtener_Subcriptores();
        require("view/Analytics.php");
    }

    public function VistaReporte(){
        $usuario_asistencia  = new Usuario();
        
      // echo ' <script> alert("  '."'".' ")</script> ';
    echo ' ';
      //    echo "<script> window.onload = function(){ EXIT();  } </script>"; 

        if(empty($_REQUEST['Dia'])){ 
             
        }else{
            $_SESSION["DIA"]=  $_REQUEST['Dia']; 
        }
  

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

       
        $lista_conferencia = new Usuario();
        $lista_conferencia = $this->model4_conferencia->Obtener_listaconferencia();
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
        /* 
      $rdb = new firebaseRDB("https://scannerqr-f531a-default-rtdb.firebaseio.com/"); 
      $retrive = $rdb->retrieve("/Usuario","EQUAL","1-959-6451");
      $data = json_decode($retrive,1);
       
          if(isset($data[''])!=null){
            echo " <script> alert('SI')</script>";
          }else{
           echo " <script> alert('No')</script>";
          }

*/

/*
       $url="https://congreso-a1e49-default-rtdb.firebaseio.com//proydsect.json";
       $ch= curl_init();
       curl_setopt($ch,CURLOPT_URL,$url);
       curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
       $response =  curl_exec($ch);
       curl_close($ch);

       $data = json_decode($response,true);
       foreach ($data as $key => $value){
        echo " <script> alert('.$data[$key]".[""].".')</script>";
       
       }
*/
      /*
       
          
          */


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
           
            //$_SESSION["ID"] = true;
            $_SESSION["user"] = $resultado->nombre." ".$resultado->apellido;
           
 
            if($_SESSION["Nivel"] == 2 or $_SESSION["Nivel"] == 3 or  $_SESSION["Nivel"] == 1  ){
                header('Location: ?op=report&ING=true');

            }else{
                header('Location: ?op=permitido&ING=true');
            }

        }
        else
        {
            header('Location: ?&msg=Su contraseña o usuario está incorrecto&ING=false');
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

        header('Location: ?op=Setting&msg='.$this->resp.'&CAM=True');
    }

        
    public function AGregar_Conferencia(){
        
       

        $usuario = new Usuario();
        $usuario->Empresa = $_REQUEST['Empresa'];
        $usuario->Ubiacion = $_REQUEST['Ubicacion'];
        $usuario->Conferencista=$_REQUEST['confe'];
        $usuario->Tema=$_REQUEST['tema'];
        $usuario->Seccion=$_REQUEST['secciones'];
        if( $usuario->Empresa!="" and $usuario->Ubiacion!="" ){
         $this->resp= $this->model->Insertar_Asistencia_Confere($usuario);
        }
       



    }

    
    public function Actualizar_Contraseña(){
       
        $usuario = new Usuario();
        $usuario->Contra_0 = $_REQUEST['passwor_old'];
        $usuario->Contra1 = md5($_REQUEST['passwor1']);
        $usuario->Contra2 = md5($_REQUEST['passwor2']);
        $usuario->id=$_SESSION["id"];

        if(   $usuario->Contra_1 == $usuario->Contra_2){

        $this->resp= $this->model->ActualizarConta($usuario);
            header('Location: ?op=Setting&msg='.$this->resp);
        
         //consulta de conferencia  if()
         header('Location: ?op=Setting&msg='.$this->resp);

    }
        
      

        header('Location: ?op=Setting&msg='.$this->resp);
    }

    
    public function Guardar_Asistencia(){
        $usuario_asistencia  = new Usuario();
       
        
        $usuario_asistencia->Cedula =      $_REQUEST['Cedula'];
        $usuario_asistencia->Dia =         $_REQUEST['Dia'];
        $usuario_asistencia->Conferencia = $_SESSION["CNFE"] ;
       
             if($resp= $this->model__asistencia->asisitencia_Lits($usuario_asistencia) ){
                   //MODIFICAR REGISTRO
                  

                   if($usuario_w= $this->model->Obtener_Sub($usuario_asistencia->Cedula)){
                    
                    $model__asistencia_MODI  = new Usuario();
                    $model__asistencia_MODI->ID_Asistencia=$resp->ID_asistencia;
                    
                     $this->resp_ALTER= $this->model__asistencia_MODI->Insertar_Asistencia_PTS($model__asistencia_MODI);
                      $_SESSION["ASI"]="true";
                      $_SESSION["SU_EXIS"]="true";
                      $_SESSION["SU_ID"]="true";
                   
                      
                      header('Location: ?op=report&msg=Asistencia MODIFICADA&asi=true');
                   //  $model__asistencia_MODI
                  } 

                  
             }else
             {
                  
              
                  if($usuario_w= $this->model->Obtener_Sub($usuario_asistencia->Cedula) ){
                    
                    $model__asistencia_insert  = new Usuario();
                     $model__asistencia_insert->IDusuario=$usuario_w->ID_usuario;
                     $model__asistencia_insert->Dia= $usuario_asistencia->Dia;
                     $model__asistencia_insert->Conferencia = $usuario_asistencia->Conferencia;
                     try{ 
                     $this->resp_INSERT= $this->model__asistencia_insert->Insertar_Asistencia_LTS($model__asistencia_insert);
                    
                     
                     header('Location: ?op=report&msg=Asistencia Creada&asi=true');
                    }
                     catch (Exception $ex){
                        $_SESSION["SU_EXIS"]="false"; 
                     
                     
                        header('Location: ?op=report&msg=Error-2&asi=false');  
                     }
                  }else{
                    $_SESSION["SU_EXIS"]="false";   
                 
                  header('Location: ?op=report&msg=Error-3&asi=false');  
                  }  
                         
                  
                 // CREAR REGISTRO
             }       
        //$this->resp= $this->model->Registrar($usuario);

        
    }
 
    public function Agregar_Staff(){
        $usuario_Staff  = new Usuario();
        $_SESSION["ING"]="true";

        $usuario_Staff->Cedula      =  $_REQUEST['cedula_f'];
        $usuario_Staff->nombre      =  $_REQUEST['nombre_f'];
        $usuario_Staff->apellido    =  $_REQUEST['apellido_f'];
        $usuario_Staff->Correo      =  $_REQUEST['correo_f'];
        $usuario_Staff->sexo        =  $_REQUEST['Sexo'];
        //$usuario_Staff->fecha_de_nacimiento = $_REQUEST['Cedula'];
        $usuario_Staff->conferencia =  $_REQUEST['conferencia'];
        $usuario_Staff->nivel       =  $_REQUEST['nivel'];
        $usuario_Staff->contraseña1       =  md5($_REQUEST['contraseña']);
        $usuario_Staff->contraseña       =  md5($_REQUEST['contraseña_2']);
                          if($usuario_Staff->contraseña1== $usuario_Staff->contraseña){  
                             
                               if($usuario_w= $this->model-> Obtener_Staff($usuario_Staff->Cedula )){
                                $_SESSION["STA"]="false";
                                header('Location: ?op=Setting&msg=ERROR DE REGISTROS&ST=false'); 
                               }else{
                                $this->resp_INSERT= $this->model__asistencia_insert->Insertar_STAFF_LTS($usuario_Staff); 
                                $_SESSION["STA"]="true";


                                $mail = new PHPMailer(true);
                                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                                $mail->isSMTP();                                            //Send using SMTP
                                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                $mail->Username   = constant('CORREO_REMITENTE');                     //SMTP username
                                $mail->Password   = constant('CORREO_PASS');                               //SMTP password
                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                                $mail->Port       = 465;
                    
                                //Recipients
                                $mail->setFrom(constant('CORREO_REMITENTE'), 'DS 7 CONGRESO');
                                $mail->addAddress($usuario_Staff->Correo ); 
                                //plantilla HTML
                    
                                $mensajeHTML='
                                    <p align="center"> 
                                    <img src="https://utp.ac.pa/documentos/2015/imagen/logo_utp_1_72.png" width="100px" height="100px" >
                                    </p>
                                    <p align="center">Registro de cuenta exitosa </p>
                                    <p align="center">Correo:'.$usuario_Staff->Correo.'</p>
                                    <p align="center">Contraseña  :'.$_REQUEST['contraseña'].'</p>
                                    <p align="center">Congreso :'.$usuario_Staff->conferencia.'</p>
                                    <p align="center"><b>Acceda al siguiente enlace: </b></p>
                                    <p align="center">
                                    <a href="http://http://localhost/Proyecto-Desarrollo-VII/?op=Logg&e='.$usuario_Staff->Correo .'&h='.$usuario_Staff->Correo .'">INGRESAR</a><br />
                                    </p>';
                                   
                    
                                //Content
                                $mail->isHTML(true);                                  //Set email format to HTML
                                $mail->Subject = 'Registro Creado Con exito';
                                $mail->Body    = $mensajeHTML;
                                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                    
                                try { 
                                $mail->send();
                                }
                                catch(Exception $ex){}
                                echo '<meta http-equiv="refresh" content="0;url=?op=Setting&msg=Se ha enviado un correo electrónico para restablecer la contraseña&ST=true">';



                               // header('Location: ?op=Setting&msg=REGISTRO EXITOSO');  
                               }
                            }
    }


}



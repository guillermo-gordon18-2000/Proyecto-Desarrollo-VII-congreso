<?php
@session_start();// Comienzo de la sesión
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
//require_once 'Model/ubicacion.php';
require_once 'Model/usuario.php';

$_SESSION['Nivel']= $usuario->Nivel;

if ($_SESSION["acceso"] != true)
{
    header('Location: ?op=error');
}
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Prototipo</title>
     <!-- MATERIAL ICONS -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
      <!-- STYLESHEET -->
      <link rel="stylesheet" href="Public/css/style-Main.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 


<script>
    
 window.onload = function(){
    
    SelectDia();
   
    if(<?php   if(isset($_GET['asi'])){ echo "true";}else{echo "false";}?>     ){  
        if(<?php if(isset($_GET['asi'])){$opcion=$_GET['asi']; echo $opcion; }else{echo "false";}  ?>)
        {    
Swal.fire({
  icon: 'success',
  title: 'ASISTENCIA',
  text: 'EXITOSA'
  
   //,  footer: '<a href="">-----</a>'
})


        }else{
            Swal.fire({
  icon: 'error',
  title: 'ASISTENCIA',
  text: 'USUARIO NO SUSCRITO',
  footer: '<a href="">-----</a>'
})


        }
    
 }



 }

 function ERROR(){
    Swal.fire({
  icon: 'error',
  title: 'ASISTENCIA',
  text: 'USUARIO NO SUSCRITO',
  footer: '<a href="">-----</a>'
})

 }
    

 function EXIT(){
    Swal.fire({
  icon: 'success',
  title: 'ASISTENCIA',
  text: 'USUARIO NO SUSCRITO',
  footer: '<a href="">-----</a>'
})

 }
    

  
const Orders=[  <?php  
                                    $n=1;

                              $Subcriptores_Info = new Usuario();
                              if($usuario->Nivel >= 1){   

                                    foreach ($lista_SUS_U as $lista_sub) {
                                    
                                    ?>
                  {
                  productName:'<?php echo $lista_sub->Nombre."  ".$lista_sub->Nombre;?>',
                  productNumber:'<?php echo $lista_sub->Cedula;?>',
                  paymentStatus:'<?php echo $lista_sub->Opupacion;?>',
                  shipping:'<?php echo $lista_sub->Tipo_Ticket;?>',
                  Status:'<?php echo $lista_sub->Sexo;?>',
                  Hora_E:'<?php echo $lista_sub->Hora_Entrada;?>',
                  Hora_S:'<?php echo $lista_sub->Hora_Salida;?>',
                  time:'<?php echo $lista_sub->Fecha; ?>'    
                  },     <?php $n++; }    }  ?>
                
                ];


               
function SelectDia()
{
   
   
  //   window.location.href = window.location.href + "" + ""; 
const fecha = document.getElementById("Dia").value

//Swindow.location ="Report.php?fecha="+fecha;
                Orders.forEach(order =>    {
const tr = document.createElement('tr');

//tr.empty();
//fecha=="2022-11-12"
if("<?php echo $_SESSION["DIA"] ?>"==order.time){
const trContent = ` 

                  <td>${order.productName}</td>
                  <td>${order.productNumber}</td>
                  <td>${order.paymentStatus}</td>
                  <td class="${order.shipping === 'None' ? 'warning':'primary'}">${order.shipping}</td>
                  <td class="${order.Status === 'A' ? 'success':'danger'}">${order.Status}</td>
                  <td class="primary">${order.Hora_E}</td>  
                  <td class="primary">${order.Hora_S}</td>    
                  
`;

//tr.appendChild(trContent); // tr.innerHTML= trContent; 
document.querySelector('table tbody').appendChild(tr).remove();
document.querySelector('table tbody').appendChild(tr).innerHTML = trContent;


 }  

}     )


}


</script>



<script src="https://unpkg.com/html5-qrcode"></script>
                                <script>               
                                
//https://github.com/mebjas/html5-qrcode
    function docReady(fn) {
        // see if DOM is already available
        if (document.readyState === "complete"
            || document.readyState === "interactive") {
            // call on next available tick
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    }

    docReady(function () {
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;
        function onScanSuccess(decodedText, decodedResult) {
            if (decodedText !== lastResult) {
                ++countResults;
                lastResult = decodedText;
                // Handle on success condition with the decoded message.
                alert (decodedText); 
              //  window.location.href = window.location.href + "?qr=" + decodedText ;
              
         document.getElementById("Cedula").value = decodedText;
             //   console.log('Scan result ${decodedText}', decodedResult);
           
            }
        }

        var html5QrcodeScanner = new Html5QrcodeScanner(
            "qr-reader", { fps: 10, qrbox: 250 });
        html5QrcodeScanner.render(onScanSuccess);
    });      

    
    if(document.getElementById("btn-modal").checked){
    document.getElementById("container-modal").style.display = flex
    alert ("IS CHECKED"); 

} 
     
    
            
</script>

                    
<body>
      <div class="container" >
        <aside >
           <div class="top">
                 <div class="logo">
                     <img src="Public/images/images-12/logo.png" >
                     <h2 > T<span class="danger">WSB</span></h2>
                 </div>
                  
                 <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                 </div>

           </div>
               <div class="sidebar">



               
               <?php if($usuario->Nivel == 0){
                                           echo $h="<a href="."?op=dash"." >";
                                           echo $h="<span class="."material-icons-sharp".">grid_view</span>";
                                           echo $h=" <h3>Dashoard</h3>";
                                             
                                           echo $h="<a href="."?op=Analit"." >";
                                           echo $h="<span class="."material-icons-sharp".">insights</span>";
                                           echo $h=" <h3>Dashoard</h3>";
                                           echo $h="</a>
                                           ";
                                             
                                             

                                           } ?>
                    
                        
            

                       


                        <a href="#" class="active">
                            <span class="material-icons-sharp">report_gmailerrorred</span>
                             <h3>Report</h3>
                        </a>


                        <a href="?op=Setting"> 
                            <span class="material-icons-sharp">settings</span>
                             <h3>Settings</h3>
                        </a>

                      

                      

                        <a href="?op=Logg">
                            <span class="material-icons-sharp">logout</span>
                             <h3>Logg out</h3>
                        </a>
                       
                    </a>
               </div>
        </aside>
        <!----------------------- END OF ASIDE ------------------->
             <main>
              <h1>REPORTES</h1>
              <div class="date">
                <input type="date">

              </div>



              <form class="form-horizontal form-material" name="formulario" method="POST" action="./?op=report" enctype="multipart/form-data">
              
                  <button class="btn-login"><div class="boton-modal" style="padding: 40px;display:<?php if( $usuario->Nivel == 0){ echo "none";}else{echo "grid";} ?>   ;">
                    <label for="btn-modal">

                       CONSULTAR
                    </label> 
                  </div></button>

                  <select id="Dia" name="Dia"  class="form-control" <?php if( $usuario->Nivel == 0){ echo "style="."display:none".";";} ?>   >
                                        
                                        <option  value="2022-11-12">   Dia 1</option>
                                        <option  value="2022-11-13">   Dia 2 </option>
                                        <option  value="2022-11-14">   Dia 3</option>
                                        <option  value="2022-11-15">   Dia 4</option>
                                        <option  value="2022-11-16">   Dia 5</option>
                                        <option  value="2022-11-17">   Dia 6</option>
                                        <option  value="2022-11-18">   Dia 7</option>
                                    </select >
                  </form>  
       



                  <input type="checkbox" id="btn-modal" >
        
              <div class =insights>

                <!--  
                    <div class="sales">
                        <span class="material-icons-sharp">analytics</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total Suscritos</h3>
                                <h1>451</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle  cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                  <p>81%</p>
                                </div>
                            </div>
                        </div>
                         <small class="text-muted">Last 24 Hours</small>
                    </div>

                    -->
                      <!----------------------- END OF Sales ------------------->

                      <!--  
                      <div class="expenses">
                        <span class="material-icons-sharp">bar_chart</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total Asistieron</h3>
                                <h1>350</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle  cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                  <p>62%</p>
                                </div>
                            </div>
                        </div>
                         <small class="text-muted">Last 24 Hours</small>
                    </div>

                    -->
                      <!----------------------- END OF EXPENSES ------------------->
                     <!-- <div class="income">
                        <span class="material-icons-sharp">stacked_line_chart</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total No Asistieron</h3>
                                <h1>125</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle  cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                  <p>44%</p>
                                </div>
                            </div>
                        </div>
                         <small class="text-muted">Last 24 Hours</small>
                    </div>
                -->
                      <!----------------------- END OF INCOME ------------------->
              </div>
                 <!----------------------- END OF INSIGHTS ------------------->
                       <div class="recent-order">


                      <!--   <h2>SUSCRITOS</h2> -->
                           <table>
                              <thead>
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Cedula</th>
                                    <th>Ocupacion</th>
                                    <th>Tipo de Ticket</th>
                                    <th><?php if($usuario->Nivel == 0){echo "ESTADO";}else{echo "Sexo";}?></th>
                                    <?php if($usuario->Nivel >= 1){
                                  echo $h="<th>Hora-E</th>";
                                  echo $j= "<th>Hora-S</th>";
                                     } ?>
                                </tr>
                              </thead>
                              <?php  
                                    $n=1;

                                    $Subcriptores_Info = new Usuario();
                              if($usuario->Nivel == 0){   
                                    foreach ($Subcriptores as $lista_sub) {
                                    ?>
                                    <tbody>
                                              <td><?php echo $lista_sub->Nombre."  ".$lista_sub->Nombre;?></td>
                                               <td><?php echo $lista_sub->Cedula;?></td>
                                               <td><?php echo $lista_sub->Opupacion;?></td>
                                               <td class="warning"><?php echo $lista_sub->Tipo_Ticket;?></td>
                                              <td class="<?php if($Subcriptores_Info = $this->model__Subcriptores_ST->Obtener_INFO_Subcriptores($lista_sub->ID_usuario)){echo $ns="success";}else{echo $ns="danger";}?>">
                                              <?php 
                                              if($Subcriptores_Info = $this->model__Subcriptores_ST->Obtener_INFO_Subcriptores($lista_sub->ID_usuario)){ echo $ns="A";}else{echo $ns="X";}
                                              ?>
                                              </td>
                                              <?php if($usuario->Nivel == 0){
                                               echo $h="<td class="."primary"."></td>";
                                              echo $h="<td class="."primary"."></td>"; }
                                           ?>
                                     <!--
                                           <tr>
                                             <td> Foldable Mini Drone</td>
                                             <td>85631</td>
                                             <td>Due</td>
                                             <td class="warning">Pending</td>
                                             <td class="primary">Details</td>
                                        </tr>  -->
                                       
                                    </tbody><?php $n++; }    }else { }

                           //     foreach ($Subcriptores as $lista_sub){ 


                                    
                                    ?>
                                    <tbody>
                                    
                                               <td><?php // echo $lista_sub->Nombre."  ".$lista_sub->Nombre;?></td>
                                               <td><?php //echo $lista_sub->Cedula;?></td>
                                               <td><?php //echo $lista_sub->Opupacion;?></td>
                                               <td class="warning"><?php //echo $lista_sub->Tipo_Ticket;?></td>
                                               <td class="<?php //if($Subcriptores_Info = $this->model__Subcriptores_ST->Obtener_INFO_Subcriptores($lista_sub->ID_usuario)){echo $ns="success";}else{echo $ns="danger";}?>">
                                              <?php 
                                              //if($Subcriptores_Info = $this->model__Subcriptores_ST->Obtener_INFO_Subcriptores($lista_sub->ID_usuario)){ echo $ns="A";}else{echo $ns="X";}
                                              ?>
                                              </td>
                                              <td class="primary"><?php  //echo $lista_sub->Hora_Entrada?></td>
                                              <td class="primary"><?php // echo $lista_sub->Hora_Salida?></td>

                                     <!-- 
                                           <tr>
                                             <td> Foldable Mini Drone</td>
                                             <td>85631</td>
                                             <td>Due</td>
                                             <td class="warning">Pending</td>
                                             <td class="primary">$lista_sub->Hora_Entrada</td>
                                        </tr>  -->
                                       
                                    </tbody><?php $n++; //  } 




                                 //   }?> 

                           </table>
                        
                                   <a href="#">Show All</a>
                       </div>
             </main>
<!-------------------------------- END OF MAIN ------------------->
            

          <div class="right">
                <div class="top">
                    <button id="menu-btn">
                            <span class="material-icons-sharp">menu</span>
                    </button>
                     <div class="theme-toggler">
                        <span class="material-icons-sharp active" >light_mode</span>
                        <span class="material-icons-sharp">dark_mode</span>
                     </div>
                     <div class="profile">
                        <div class="info">
                            <p> Hey ,<b><?php echo $_SESSION["user"]; ?> </b></p>

                            <small class="text-muted">Admin <?php echo $_SESSION["Nivel"]; ?> </small>
                            <small class="text-muted">QR <?php echo $_SESSION["ASI"];?></small>
                            <small class="text-muted">DIA <?php echo  $_SESSION["DIA"];?></small>
                          
                        </div>

                         <div class="profile-photo">
                            <img src=" Public/images/users/<?php echo $_SESSION["foto"]; ?>" >
                         </div>
                     </div>
                </div>
<!-------------------------------- END OF TOP ------------------->
<!--  
                       <div class="recent-updates">
                           <h2>Recent Updates</h2>
                           <div class="updates">

                            <div class="update">
                            <div class="profile-photo">
                                 <img src="./images/profile-2.jpg" alt="">
                            </div>
                            <div class="message">
                                <p><b>Muke Tyson</b> received his order of nation</p>
                                  <small class="text-muted">2 minutes ago </small>
                            </div>
                            </div>

                            <div class="update">
                                <div class="profile-photo">
                                     <img src="./images/profile-3.jpg" alt="">
                                </div>
                                <div class="message">
                                    <p><b>Muke Tyson</b> received his order of nation</p>
                                      <small class="text-muted">2 minutes ago </small>
                                </div>
                                </div>

                                <div class="update">
                                    <div class="profile-photo">
                                         <img src="./images/profile-4.jpg" alt="">
                                    </div>
                                    <div class="message">
                                        <p><b>Muke Tyson</b> received his order of nation</p>
                                          <small class="text-muted">2 minutes ago </small>
                                    </div>
                                </div>
                           </div>
                       </div>
                       -->
          <!-------------------------------- END OF UPDATE ------------------->
                        
                            
          <form class="form-horizontal form-material" name="formulario" method="POST" action="./?op=ASISITENCIA" enctype="multipart/form-data">
                              <div class="sales-analytics_2" style="">
                              <h2>ANALITICA CONFERENCA</h2>
                              <div class="item online" style="display:<?php if( $usuario->Nivel == 0){ echo "none";}else{echo "grid";} ?>   ;">
                              
                                <div class="icon">
                                    <span class="material-icons-sharp">shopping_cart</span>
                                </div>
                          
                                <div class="right">
                                       <div class="info">
                                        <h3>CEDULA</h3>
                                       
                                        <input type="text" name="Cedula" id="Cedula" placeholder="Cedula">
                                       
                                    

                                       
                                       
                                        <?php  
                                    $n=1;   
                                    if($usuario->Nivel == 0){ 
                                        echo"  <h3>CONFERENCIA</h3> <select class="."SEL_1254"."> ";
                                      foreach ($lista_conferencia as $lista_conf) { ?>
                                                <option><?php  echo $lista_conf->empresa; ?> </option>
                                                   <?php  $n++; }}?> 
                                        
                                                </select>
                                        <select id="Dia" name="Dia" onchange=" " class="form-control">
                                        
                                             <option  value="2022-11-12">   Dia 1</option>
                                             <option  value="2022-11-13">   Dia 2 </option>
                                             <option  value="2022-11-14">   Dia 3</option>
                                             <option  value="2022-11-15">   Dia 4</option>
                                             <option  value="2022-11-16">   Dia 5</option>
                                             <option  value="2022-11-17">   Dia 6</option>
                                             <option  value="2022-11-18">   Dia 7</option>
                                         </select >
                                        <small class="text-muted">Dias</small>
                                       </div>
                                       
                                       <h5 class="success">+39%</h5>
                                       
                                     
                                       
                                            <div>
                                        
                                            <div id="qr-reader" style="width: 250px; position: relative; padding: 45px; border: 2px solid #b98f00;margin:14px;""></div>
                                              <div id="qr-reader-results" href="#"></div>
                                      
                                    
                                        <div class="item add-product">
                                            
                                                
                                                 <!-- ?op=ASISITENCIA-->
                                                 <a href="#"  class="title-i"><button for="btn-modal" class="btn btn-primary" href="#"> <div class="boton-modal">
                    <label for="btn-modal">
                         ASISTENCIA
                    </label> 
                  </div></button></a>
                                                  
                                                
                   
                                                
                                                 
                                                 
                                                            
                                             
                                                        
                                               
                                          
                                                </div>

                                            
                                             </div>
       
                  
                                            
                                             
    
                                       </div>
                          



                                

                                      </div>
                
            </div>
      </div>   <!--
                        <form class="form-horizontal form-material" name="formulario" method="POST" action="./?op=actualizar" enctype="multipart/form-data">
                       
                        <button class="btn btn-primary" href="#">Update</button>
                        </form>
                                      -->
                        
      </form>


     <script src="Public/js/index.js"></script>  
</body>
</html>
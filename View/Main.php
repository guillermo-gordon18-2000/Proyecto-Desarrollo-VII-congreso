


<?php
@session_start();// Comienzo de la sesión

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
     <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
      <!-- STYLESHEET -->
       <link rel="stylesheet" href="Public/css/style-Main.css">  
</head>
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
                    <a href="#" class="active"  >
                        <span class="material-icons-sharp">grid_view</span>
                         <h3>Dashoard</h3>

                        

                        

                        <a href="?op=Analit">
                            <span class="material-icons-sharp">insights</span>
                             <h3>Analytics</h3>
                        </a>

                       


                        <a href="?op=report">
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
              <h1>DASHBOARD</h1>
              <div class="date">
                <input type="date">
                <?php 
                                      $Subcriptores_Info = new Usuario();
                                    $Sus=0;
                                    $S_n=0;
                                    $S_SI=0;
                                      foreach ($Subcriptores as $lista_sub) {
                                           $Sus++;
                                           if($Subcriptores_Info = $this->model__Subcriptores_ST->Obtener_INFO_Subcriptores($lista_sub->ID_usuario)){  $S_n++; }else{$S_SI++;}
                                      }
                                    ?>
              </div>
              <div class =insights>
                    <div class="sales">
                        <span class="material-icons-sharp">analytics</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total Suscritos</h3>
                                <h1><?php echo $Sus; ?></h1>
                            </div>
                            <!--
                            <div class="progress">
                                <svg>
                                    <circle  cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                  <p>81%</p>
                                </div>
                            </div>
                             -->
                        </div>
                         <small class="text-muted">Last 24 Hours</small>
                    </div>
                      <!----------------------- END OF Sales ------------------->
                                    


                      <div class="expenses">
                        <span class="material-icons-sharp">bar_chart</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total Asistieron</h3>
                                <h1><?php echo $S_n; ?></h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle  cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                  <p><?php echo round(($S_n /$Sus )*100,2) ?></p>
                                </div>
                            </div>
                        </div>
                         <small class="text-muted">Last 24 Hours</small>
                    </div>
                      <!----------------------- END OF EXPENSES ------------------->
                      <div class="income">
                        <span class="material-icons-sharp">stacked_line_chart</span>
                        <div class="middle">
                            <div class="lef">
                                <h3>Total No Asistieron</h3>
                                <h1><?php echo $S_SI ?></h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle  cx='38' cy='38' r='36'></circle>
                                </svg>
                                <div class="number">
                                  <p><?php echo round(($S_SI/$Sus)*100,2) ?></p>
                                </div>
                            </div>
                        </div>
                         <small class="text-muted">Last 24 Hours</small>
                    </div>
                      <!----------------------- END OF INCOME ------------------->
              </div>
                 <!----------------------- END OF INSIGHTS ------------------->
                          <div class="right">                     
                  <div class="sales-analytics">
                            <h2> CONFERENCA ACTUALES</h2>
                            

                            
                           <?php  
                                    $n=1;   
                                      foreach ($lista_conferencia as $lista_conf) {
                                     
                                    ?>
                            <div class="item online">
                                <div class="icon">
                                    <span class="material-icons-sharp">shopping_cart</span>
                                </div>
                                <div class="right">
                                       <div class="info">
                                        <h3><?php echo $lista_conf->empresa; ?></h3>
                                        <small class="text-muted"><?php echo $lista_conf->secciones; ?></small>
                                       </div>
                                       
                                           
                                       
                                           
                                </div>
                                <div class="right">
                                <div class="info-AUTOR" style="display: none;">
                                       <img class="image-autor" src="Public/images/users/<?php echo $_SESSION["foto"]; ?>" >
                                        <small class="text-muted"><?php echo $lista_conf->secciones; ?></small>
                                       </div>
                                       <div class="info-AUTOR" style="display: none;">
                                       <img class="image-autor" src="Public/images/users/<?php echo $_SESSION["foto"]; ?>" >
                                        <small class="text-muted"><?php echo $lista_conf->secciones; ?></small>
                                       </div>
                                  
                                  </div>
                                <div class="right">
                                <h3 class="font-12"><?php echo $lista_conf->ubicacion; ?> </h3>
                                            <div class="item" style="display: none;">
                                            <span class="material-icons-sharp">person</span>
                                            <h3>0/400</h3>
                                             </div>
                                </div>
                               
                                <div class="right-end">

                                   
                                            <div class="item">
                                            <span class="material-icons-sharp">person</span>
                                            <h3>0/400</h3>
                                             </div>
                                </div>
                            </div>

                            <?php

                             $n++;
                              }
                                  ?> 

                            

                            

                              <div class="item add-product" data-toggle="pill" href="#Conferencia-12" role="tab" aria-controls="security" aria-selected="false">
                                   <div>
                                    <span class="material-icons-sharp">add</span>
                                    <h3>Agregar Conferencias</h3>
                                   </div>
                              </div>

                   </div>
             </div>  
                 
                 <!--       <div class="recent-order">
                         <h2>Recent Orders</h2>
                           <table>
                              <thead>
                                <tr>
                                    <th>Autores</th>
                                    <th>#conferencia</th>
                                    <th>Conferencia</th>
                                    <th>Estado</th>
                                  
                                    <th>Descripcion</th>
                                </tr>
                              </thead>
                                    <tbody>
                                <!--        <tr>
                                             <td> Foldable Mini Drone</td>
                                             <td>85631</td>
                                             <td>Due</td>
                                             <td class="warning">Pending</td>
                                             <td class="primary">Details</td>
                                        </tr>  -->
                                   <!--               
                                    </tbody>
                           </table>
                        
                                   <a href="#">Show All</a>
                       </div> --> 
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

                            <small class="text-muted">Admin <?php echo $_SESSION["Nivel"]; ?></small>
                           
                        </div>

                         <div class="profile-photo">
                            <img src=" Public/images/users/<?php echo $_SESSION["foto"]; ?>" >
                         </div>
                     </div>
                </div>
            
<!-------------------------------- END OF TOP ------------------->
 
                       <div class="recent-updates">
                           <h2>PERSONAL</h2>
                           <div class="updates">

                           <?php  
                                    $n=1;
                                    foreach ($listaUsuario as $lista) {
                                    ?>
                            <div class="update">
                            
                            <div class="profile-photo">
                                 <img src="Public/images/users/<?php echo  $lista->Foto ?>" alt="">
                            </div>
                            <div class="message">
                                <p><b><?php echo $lista->nombre; ?> <?php echo $lista->apellido; ?></b> received his order of nation</p>
                                  <small class="text-muted"><?php echo $lista->Correo; ?> </small>
                            </div>
                            </div>

                            <?php

                            $n++;
                              }
                              ?> 
                           

                              
                           </div>

                           
                       </div>
                       
          <!-------------------------------- END OF UPDATE ------------------->
          
                        <div class="sales-analytics">
                            
                           

                           

                            
                                       <!--  
                            <div class="item onlin">
                                <div class="icon">
                                    <span class="material-icons-sharp">shopping_cart</span>
                                </div>
                                <div class="right">
                                       <div class="info">
                                        <h3>COPA</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                       </div>
                                       <h5 class="success">+39%</h5>
                                       <h3>3849</h3>
                                </div>
                            </div>-->

                              <div class="item add-product">
                                   <div>
                                    <span class="material-icons-sharp">add</span>
                                    <h3>Agregar Moderador</h3>
                                   </div>
                              </div>

                   </div>
            </div>

      </div>
     
      <script src="Public/js/orders.js"></script>
       <script src="Public/js/index.js"></script>
</body>
</html>
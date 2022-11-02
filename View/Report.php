<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Prototipo</title>
     <!-- MATERIAL ICONS -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
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
                    <a href="?op=dash" >
                        <span class="material-icons-sharp">grid_view</span>
                         <h3>Dashoard</h3>

                        

                        

                        <a href="?op=Analit">
                            <span class="material-icons-sharp">insights</span>
                             <h3>Analytics</h3>
                        </a>

                       


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

                       <div class="item add-product">
                                  
                       <span class="material-symbols-outlined">qr_code_scanner</span>
                                    <i>QR</i>
                                   <input type="file" id=real-file hidden="hidden"></input>
                                   <button type="button" id="custom-button"></button>
                              </div>

                              <div class="item add-product">
                                  
                              <span class="material-symbols-outlined">photo_camera</span>
                              <i>CAMERA</i>
                                   <input type="file" id=real-file hidden="hidden"></input>
                                 <button type="button" id="custom-button"></button>
                              </div>

                         <h2>Recent Orders</h2>
                           <table>
                              <thead>
                                <tr>
                                    <th>Usuarios</th>
                                    <th>Cedula</th>
                                    <th>Ocupacion</th>
                                    <th>Facultada</th>
                                    <th>Estado</th>
                                    <th>Hora-E</th>
                                    <th>Hora-S</th>
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
                                       
                                    </tbody>
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
                            <p> Hey ,<b>Karian </b></p>

                            <small class="text-muted">Admin</small>

                        </div>

                         <div class="profile-photo">
                            <img src="Public/images/images-12/profile-1.jpg" >
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
                        <div class="sales-analytics">
                            <h2>ANALITICA CONFERENCA</h2>
                            <div class="item online">
                                <div class="icon">
                                    <span class="material-icons-sharp">shopping_cart</span>
                                </div>
                                <div class="right">
                                       <div class="info">
                                        <h3>DELL</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                       </div>
                                       <h5 class="success">+39%</h5>
                                       <h3>3849</h3>
                                </div>
                            </div>

                            <div class="item offline">
                                <div class="icon">
                                    <span class="material-icons-sharp">local_mall</span>
                                </div>
                                <div class="right">
                                       <div class="info">
                                        <h3>HUAWEI</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                       </div>
                                       <h5 class="danger">-39%</h5>
                                       <h3>3849</h3>
                                </div>
                            </div>

                            <div class="item customers">
                                <div class="icon">
                                    <span class="material-icons-sharp">person</span>
                                </div>
                                <div class="right">
                                       <div class="info">
                                        <h3>SAMSUNG</h3>
                                        <small class="text-muted">Last 24 Hours</small>
                                       </div>
                                       <h5 class="success">+25%</h5>
                                       <h3>835</h3>
                                </div>
                            </div>

                            <div class="item online">
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
                            </div>

                              <div class="item add-product">
                                   <div>
                                    <span class="material-icons-sharp">add</span>
                                    <h3>Add Product</h3>
                                   </div>
                              </div>

                   </div>
            </div>
      </div>
      <script src="Public/js/orders.js"></script>
      <script src="Public/js/index.js"></script>
</body>
</html>
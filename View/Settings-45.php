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
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Prototipo</title>
     <!-- MATERIAL ICONS -->


     <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Public/css/profile.css">


 

      <!-- STYLESHEET -->
      <meta charset="UTF-8">
	<title>Account Settings UI Design</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	
      <link rel="stylesheet" href="Public/css/style-Main.css">
</head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>


window.onload = function(){
    
   
   
    if(<?php   if(isset($_GET['ST'])){ echo "true";}else{echo "false";}?>     ){  
        if(<?php if(isset($_GET['ST'])){$opcion=$_GET['ST']; echo $opcion; }else{echo "false";}  ?>)
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
</script>
    

<body>
      <div class="container">
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
                   

               <?php if($_SESSION["Nivel"] == 0){
                                           echo $h="<a href="."?op=dash"." >";
                                           echo $h="<span class="."material-icons-sharp".">grid_view</span>";
                                           echo $h=" <h3>Dashoard</h3>";
                                             
                                           echo $h="<a href="."?op=Analit"." >";
                                           echo $h="<span class="."material-icons-sharp".">insights</span>";
                                           echo $h=" <h3>Dashoard</h3>";
                                           echo $h="</a>
                                           ";
                                             
                                             

                                           } ?>
                       


                        <a  href="?op=report">
                            <span class="material-icons-sharp">report_gmailerrorred</span>
                             <h3>Report</h3>
                        </a>


                        <a href="#" class="active">
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
              <h1>PERFIL DE USUARIO</h1>
         <!--  <div class="date">
                <input type="date">

              </div>

              --> <div class="right">                     
                 <div class="sales-analytics"> 

                  
                

              <div class="item online">

            
              <button style="display: none;" class="btn-login"><div class="boton-modal" style="padding: 40px;">
                    <label for="btn-modal">

                       CONSULTAR
                    </label> 
                  </div></button>

              <input type="checkbox" id="btn-modal">
              <div class="container-modal" id="container-modal">
               
               <div class="content-modal">
               <h2>ASISTENCIA</h2>
           
               <p>GUILLERMO GORDON</p>

               <p>Entrada</p>
               <p>Salida</p>
               <div class="btn-cerrar">
                <label for="btn-modal">Cerrar</label>
               </div>
               </div>
          </div>

           
		<div class="container-Settings">
			
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-44">
						<div class="img-circle text-center mb-3" >
							<img src=" Public/images/users/<?php echo $_SESSION["foto"]; ?>" alt="Image" class="shadow">
						</div>
						<h4 class="text-center"><?php echo $_SESSION["user"]?> </h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>

                          
               <?php if($usuario->Nivel == 0){
                                          echo $h="<a class="."nav-link"." id="."security-tab"." data-toggle="."pill"." href="."#security"." role="."tab"." aria-controls="."security"." aria-selected="."false".">";
                                          echo $h="<i class="."fa fa-user text-center mr-1"."></i> ";
                                          echo $h="AGREGAR STAFF";
                                          echo $h="</a>";
                                             
                                           echo $h="<a class="."nav-link"." id="."security-tab"." data-toggle="."pill"." href="."#Conferencia-12"." role="."tab"." aria-controls="."security"." aria-selected="."false".">";
                                           echo $h="<i class="."fa fa-user text-center mr-1"."></i> ";
                                           echo $h="AGREGAR CONFERENCIA";
                                           echo $h="</a>";
                                             
                                             

                                           } ?>

						
						 
							
						
                        
							
							
						
                      
                        <!--
						<a class="nav-link" id="application-tab" data-toggle="pill" href="#application" role="tab" aria-controls="application" aria-selected="false">
							<i class="fa fa-tv text-center mr-1"></i> 
							Application
						</a>
						<a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab" aria-controls="notification" aria-selected="false">
							<i class="fa fa-bell text-center mr-1"></i> 
							Notification
						</a>
 -->

					</div>
				</div>
                <!--
              -->   <form class="form-horizontal form-material" name="formulario" method="POST" action="./?op=actualizar" enctype="multipart/form-data">
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nombre</label>
								  	<input name="nombre" id="nombre" type="text" class="form-control" value="<?php echo $usuario->nombre; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Apellido</label>
								  	<input name="apellido" id="apellido"  type="text" class="form-control" value="<?php echo $usuario->apellido; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<label  class="form-control" value=""><?php echo $usuario->Correo; ?></label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Cedula</label>
								  	<label  class="form-control" value=""><?php echo $usuario->Cedula; ?></label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Company</label>
                                      <?php      foreach ($lista_conferencia as $lista_conf) { ?>
                                              <!--  <option value=" <?php ?> "  > </option>-->
                                                  
								  <?php if($lista_conf->id_conferencia==$usuario->ID_Conferencia) {  echo '<input type="text" class="form-control" value="'.$lista_conf->empresa.'">'; } ?>  
                                                                                    <?php }    ?>
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
								  	<label>FOTO</label>
                                       <input accept="image/*" type="file"  class="form-control" name="foto"
                                                id="foto" >
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								  	<label>Bio</label>
									<textarea class="form-control" rows="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore vero enim error similique quia numquam ullam corporis officia odio repellendus aperiam consequatur laudantium porro voluptatibus, itaque laboriosam veritatis voluptatum distinctio!</textarea>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary" href="#">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>

<!-- --></form>
                    
                   
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                         <form name="formulario" method="POST" action="./?op=actualizar_contra" enctype="multipart/form-data">
						<h3 class="mb-4">Password Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input name="passwor_old" id="passwor_old" type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label>
								  	<input name="passwor1" id="passwor1" type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input name="passwor1" id="passwor1" type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>

                           </form>
					</div>
                 
					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                    <form name="formulario" method="POST" action="./?op=Agregar_Staff" enctype="multipart/form-data">	
                    <h3 class="mb-4">STAFF</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Nombre</label>
								  	<input id="nombre_f" name="nombre_f" type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Apellido</label>
								  	<input  id="apellido_f" name="apellido_f" type="text" class="form-control">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
								  	<label>Cedula</label>
								  	<input  id="cedula_f" name="cedula_f" type="text" class="form-control">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
								  	<label>Correo</label>
								  	<input  id="correo_f" name="correo_f" type="text" class="form-control">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
								  	<label>Sexo</label>
								  	<select name="Sexo" id="Sexo"  onchange=" " class="form-control" >
                                        
                                             <option  value="M">Hombre</option>
                                             <option  value="F">Mujer</option>
                                           
                    
                                         </select >
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
								  	<label>Fecha de nacimiento</label>
								  	<input type="date" class="form-control">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
								  	<label>Conferencia</label>
								  
                                      <?php  
                                    $n=1;   
                                    if($usuario->Nivel == 0){ 
                                        echo" <select name=conferencia id=conferencia class="."form-control"."> ";
                                      foreach ($lista_conferencia as $lista_conf) { ?>
                                                <option value=" <?php  echo $lista_conf->id_conferencia;?> "  ><?php  echo $lista_conf->empresa; ?> </option>
                                                   <?php  $n++; }
                                                                         }?> 
                                        </select>
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
								  	<label>Nivel</label>
								  	<select    id="nivel" name="nivel"   onchange=" "  class="form-control" >
                                      <option  value="0">   0</option>
                                             <option  value="1">   1</option>
                                             <option  value="2">   2 </option>
                                             <option  value="3">   3</option>
                    
                                         </select >
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
								  	<label>Contraseña</label>
								  	<input  id="contraseña" name="contraseña" type="password" class="form-control">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
								  	<label>Confirme Contraseña</label>
								  	<input  id="contraseña_2" name="contraseña_2" type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="recovery">
										<label class="form-check-label" for="recovery">
										Recovery
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">ADD</button>
							<button class="btn btn-light">Cancel</button>
						</div>
                    </form>
					</div>

                            
                    <div class="tab-pane fade" id="Conferencia-12" role="tabpanel" aria-labelledby="security-tab">
                    <form name="formulario" method="POST" action="./?op=Agregar_conferencia" enctype="multipart/form-data">
						<h3 class="mb-4">Agregar Conferencia</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Empresa</label>
								  	<input id="Empresa" name="Empresa" type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Ubicacion</label>
								  	<input id="Ubicacion" name="Ubicacion" type="text" class="form-control">
								</div>
							</div>
							
                            <div class="col-md-6">
								<div class="form-group">
								  	<label>Conferencista</label>
								  	<input id="confe" name="confe" type="text" class="form-control">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
								  	<label>Secciones</label>
								  	<input id="secciones" name="secciones" type="text" class="form-control">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
								  	<label>Tema</label>
								  	<input id="tema" name="tema" type="text" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">ADD</button>
							<button class="btn btn-light">Cancel</button>
						</div>
                    </form>
					</div>


					<div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
						<h3 class="mb-4">Application Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="app-check">
										<label class="form-check-label" for="app-check">
										App check
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="defaultCheck2" >
										<label class="form-check-label" for="defaultCheck2">
										Lorem ipsum dolor sit.
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
						<h3 class="mb-4">Notification Settings</h3>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification1">
								<label class="form-check-label" for="notification1">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium accusamus, neque cupiditate quis
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification2" >
								<label class="form-check-label" for="notification2">
									hic nesciunt repellat perferendis voluptatum totam porro eligendi.
								</label>
							</div>
						</div>
						<div class="form-group">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="notification3" >
								<label class="form-check-label" for="notification3">
									commodi fugiat molestiae tempora corporis. Sed dignissimos suscipit
								</label>
							</div>
						</div>
						<div>
							<button class="btn btn-primary">Update</button>
							<button class="btn btn-light">Cancel</button>
						</div>
					</div>
				</div>
			</div>
		</div>
        

              </div>  <!--END -- item online-->

                              
              <div class =insights>
                
                 <!----------------------- END OF ASIDE ---------------
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
                    </div>---->
                      <!----------------------- END OF Sales --------------
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
                    </div>----->
                      <!----------------------- END OF EXPENSES ----------------
                      <div class="income">
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
                    </div>--->
                      <!----------------------- END OF INCOME ------------------->
              </div>
                 <!----------------------- END OF INSIGHTS ------------------->
                  <!--      <div class="recent-order">
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
                                      <tr>
                                             <td> Foldable Mini Drone</td>
                                             <td>85631</td>
                                             <td>Due</td>
                                             <td class="warning">Pending</td>
                                             <td class="primary">Details</td>
                                        </tr> 
                                       
                                    </tbody>
                           </table>
                        
                                   <a href="#">Show All</a>
                       </div>

                    -->
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

                            <small class="text-muted">Admin</small>

                        </div>

                         <div class="profile-photo">
                            <img src=" Public/images/users/<?php echo $_SESSION["foto"]; ?>" >
                         </div>
                     </div>
                </div>
<!-------------------------------- END OF TOP ------------------->
  
                       <div class="recent-updates">
                           <h2>Recent Updates</h2>
                           <div class="updates">
                           <?php  
                                    $n=1;
                                    foreach ($listaUsuario as $lista) {
                                    ?>
                            <div class="update">
                            
                            <div class="profile-photo">
                                 <img src=" Public/images/users/<?php echo  $lista->Foto ?>" alt="">
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
                        <!--    <h2>ANALITICA CONFERENCA</h2>
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
--> 
                   </div>
            </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  
      <script src="Public/js/orders.js"></script>
       <script src="Public/js/index.js"></script>
</body>
</html>
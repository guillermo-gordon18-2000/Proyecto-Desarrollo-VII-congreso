<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/css/Style_login.css">
    <title>Login</title>

</head>
<body>
       <div class="main-login">   
           


           
           <form action="#" method="POST">
                  <div class="right-login">
                       
                  

                    <div class="card-loginh1label">
                          <h1 class="h1-label"> <br>Regístrese </h1> 

                   
                     <div class="textfield">
                           <label for="usuario" >Nombre</label>
                           <input type="text" name="usuario" placeholder="Nombre" action="Peticiones.php">
                     </div>  

                     <div class="textfield">
                           <label for="Contraseña">Apellido</label>
                           <input type="text" name="Pasword" placeholder="Apellido">
                     </div> 
                     
                     <div class="textfield">
                           <label for="Contraseña">Correo</label>
                           <input type="mail" name="Pasword" placeholder="Ejemplo@gmail.com">
                     </div> 

                     <div class="textfield">
                           <label for="Contraseña">Contraseña</label>
                           <input type="password" name="Pasword" placeholder="Contraseña">
                     </div> 


                     <div class="textfield">
                           <label for="Contraseña">Contraseña</label>
                           <input type="password" name="Pasword" placeholder="Repetir Contraseña">
                     </div> 
                         <button class="btn-login">Login</button>
                                 <div class="d-flex justify-content-center links">
                                  ¿Ya tienes una cuenta ? - <a href="?op=Logg" class="ml-2"> Ingresar  </a>
                                 </div>
                      </div> 
                
                  </div>
                  

           </form>
                  <div  class="left-login">
          
            <img src="Public/images/on-the-office-animate.svg" class="left-login-image"  alt="Animacion">
            
           </div>
          
       </div>
</body>
</html>
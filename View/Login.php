<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Public/css/Style_login.css">
    <title>Login</title>

</head>

                                  <!--  
                                               oooooooooo.    .oooooo.   oooooooooo.   oooooo   oooo 
                                               `888'   `Y8b  d8P'  `Y8b  `888'   `Y8b   `888.   .8'  
                                                888     888 888      888  888      888   `888. .8'   
                                                888oooo888' 888      888  888      888    `888.8'    
                                                888    `88b 888      888  888      888     `888'     
                                                888    .88P `88b    d88'  888     d88'      888      
                                               o888bood8P'   `Y8bood8P'  o888bood8P'       o888o  
-->   
                                                      

 
<body>
       <div class="main-login">       <!-- _    ___   ___ ___ _  _     _    ___ ___ _____ 
                                           | |  / _ \ / __|_ _| \| |___| |  | __| __|_   _|
                                           | |_| (_) | (_ || || .` |___| |__| _|| _|  | |  
                                           |____\___/ \___|___|_|\_|   |____|___|_|   |_|  -->
           <div  class="left-login">
            <h1> <br>Congreso </h1>
            <img src="Public/images/on-the-office-animate.svg" class="left-login-image"  alt="Animacion">
            
           </div>

                                    <!--   ___ _  _ ___      _    ___   ___ ___ _  _     _    ___ ___ _____ 
                                           | __| \| |   \ ___| |  / _ \ / __|_ _| \| |___| |  | __| __|_   _|
                                           | _|| .` | |) |___| |_| (_) | (_ || || .` |___| |__| _|| _|  | |  
                                           |___|_|\_|___/    |____\___/ \___|___|_|\_|   |____|___|_|   |_|  -->




           <form action="../Model/Peticiones.php" method="POST">

                  <!-- _    ___   ___ ___ _  _     ___ ___ ___ _  _ _____ 
                      | |  / _ \ / __|_ _| \| |___| _ \_ _/ __| || |_   _|
                      | |_| (_) | (_ || || .` |___|   /| | (_ | __ | | |  
                      |____\___/ \___|___|_|\_|   |_|_\___\___|_||_| |_|  -->
                  <div class="right-login">
            
                    <div class="card-login">
                    <h1>LOGIN</h1>
                     <div class="textfield">
                           <label for="usuario" >usuario</label>
                           <input type="text" name="usuario" placeholder="Usuario" action="Peticiones.php">
                     </div>  

                     <div class="textfield">
                           <label for="Contraseña">Contraseña</label>
                           <input type="password" name="Pasword" placeholder="Contraseña">
                     </div>  
                         <button class="btn-login">Login</button>
                                 <div class="d-flex justify-content-center links">
                                  ¿Aún no tiene cuenta? - <a href="?op=crear" class="ml-2"> Regístrese aquí </a>
                                 </div>
                 </div> 
                
                  </div>
                  
                <!--  ___ _  _ ___      _    ___   ___ ___ _  _     ___ ___ ___ _  _ _____ 
                     | __| \| |   \ ___| |  / _ \ / __|_ _| \| |___| _ \_ _/ __| || |_   _|
                     | _|| .` | |) |___| |_| (_) | (_ || || .` |___|   /| | (_ | __ | | |  
                     |___|_|\_|___/    |____\___/ \___|___|_|\_|   |_|_\___\___|_||_| |_|-->

           </form>

          
       </div>
</body>
   <!--                                      
                                      888    "     8     `88b.8   888      888 8888888  888    `88b 888      888  888      888     `888'     
                                      
-->

</html>
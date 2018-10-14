<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">  
    <link rel="stylesheet" href="estilo.css">
    <style>
    
        html, body {
            
            height: 100%;
        }
        
        body {
            
            display:flex;
            align-items:center;
            margin: auto;
            background-repeat:no-repeat;
            background-position:center center;
            background-attachment:fixed;
            -o-background-size: 100% 100%, auto;
            -moz-background-size: 100% 100%, auto;
            -webkit-background-size: 100% 100%, auto;
            background-size: 100% 100%, auto;    
                
        }
        
        .container-fluid {
            
            margin: auto; 
            background-color: white;
            
            
        }
        
    </style>  
  </head>
  <body>
      
      <div class="container-fluid">

          
          <div class="row">
          
              <div id="login" class="col-md-12">
            
                    <form action="" method="post">

                        <p><span>Usuario:</span><input name="user" required></p>
                        <p><span>Contraseña:</span><input name="password" type="password" required></p>
                        <p><center><input type="submit" value="Entrar"></center></p>
                    </form>    
                    
                    
                </div>
              
          </div>
 
          
          </div>


  </body>
</html>
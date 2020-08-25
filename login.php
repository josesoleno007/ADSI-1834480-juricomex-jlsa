<?php
    
    session_start();
    if (isset($_SESSION['id'])) {

        header('location: users.php');     

       
} else{?>
  

  <!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>:: JURICOMEX | Iniciar sesion ::</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">   
 

  
      <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      body {

         background-image: url("images/fondo-blue.jpg");
         
        }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
      </head>
      <body class="text-center">
        <form class="form-signin" method="post" action="validate.php">
          <img class="img-thumbnail" src="images/logo_juricomex.jpg" alt="" width="150px" height="150px"><br><br>
          <h1 style="color:#FFFFFF;" class="h3 mb-3 font-weight-normal">Iniciar sesion</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
          <button class="btn btn-lg btn-success btn-block" type="submit">Aceptar</button><br>

          <hr>
          <div class="text-center">
            <a  style="color:#FFFFFF;" class="small" href="forgotpassword.php">Olvidaste tu contraseña?</a>
          </div>
          <div class="text-center">
            <a  style="color:#FFFFFF;" class="small" href="index.php">Volver a inicio</a>
          </div>
          <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
        </form>
   </body>
</html>

<?php
}
?>


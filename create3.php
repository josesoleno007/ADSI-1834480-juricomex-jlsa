<?php
    
    session_start();
    if (isset($_SESSION['id'])) {
       $servername = "localhost";  
        $username   = "root"; 
        $password   = ""; 
        $dbname     = "juricomex";   
        
        try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $stmt = $conn->prepare("SELECT * FROM juzadministrativo2");
              $stmt->execute();
              $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
          } catch(PDOexception $e) {
            echo $e->getMessage();
          }
        ?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>:: JURICOMEX | Crear autos juzgados laborales iss::</title>

 <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/jumbotron/">
<!-- css files -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" property="" /> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Play:400,700&amp;subset=cyrillic,cyrillic-ext,greek,latin-ext" rel="stylesheet">



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

         background-image: url("images/fondo-bluejpg");
         
        }

        .img-thumbnail {

          width: 150px;

        }

         ul {

          margin-top: 5em;  

        }

        .img-thumbnail{

          width: 150px;
          height: 150px;

        }

        form {

          margin-top: 2em;  

        }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>

<div class="container">

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Juricomex</a>
  </li>
  <li class="nav-item">
    <a style="color:#636e72;" class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Nuevo registro</a>
  </li>
  <li class="nav-item">
    <a style="color:#2d3436;" class="nav-link" href="juzadministrativo2.php">Autos</a>
  </li>
  <li class="nav-item">
    <a style="color:#2d3436;" class="nav-link" href="logout.php">Cerrar sesion</a>
  </li>
</ul>

  <div class="jumbotron mt-3">
    <img class="img-thumbnail" src="images/iss.png" >
    <img src="./images/register.png" alt="..." class="img-thumbnail">
    <h1>Crear nuevo registro juzgado administrativo - Par iss <br>(Auto)</h1>
    <p class="lead">Utiliza el siguiente formulario para crear un nuevo registro.</p>
  </div>
</div>


<div class="container">
  <div class="row">
    
    <div class="col-md-12">
      <form class="needs-validation"  method="post" action="guardaradministrativo2.php" >
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label  for="validationCustom01">Fecha de publicacion</label>
      <input type="date" class="form-control" name="fechapublic" id="validationCustom01" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Radicacion</label>
      <input type="text" class="form-control" name="radicacion" id="validationCustom02" required>
      <div class="valid-feedback">
        <strong>Looks good!</strong>
      </div>
    </div>
  </div>
 <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Demandante</label>
      <input type="text" class="form-control" name="dte" id="validationCustom01" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Demandado</label>
      <input type="text" class="form-control" name="ddo" id="validationCustom02" required>
      <div class="valid-feedback">
        Looks good!
        </div>
      </div>  
     <div class="col-md-6 mb-3">
      <label for="validationCustom02">Juzgado</label>
      <input type="text" class="form-control" name="juzgado" id="validationCustom02" required>
      <div class="valid-feedback">
        Looks good!
      </div> 
     </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Clase de proceso</label>
      <input type="text" class="form-control" name="proceso" id="validationCustom01" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Tema</label>
      <input type="text" class="form-control" name="tema" id="validationCustom02" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Enlace del auto</label>
      <input type="text" class="form-control" name="enlace" id="validationCustom02" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  </div>  
  <button class="btn btn-success btn-lg btn-block" type="submit">Crear registro</button>
 </div>

</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
    </div>
   
  </div>
</div>

    


 <br><br><br>

     <!-- footer -->
<div class="footer-agile">
  <div class="container">
    <div class="col-md-5 footer-main1">
      <h2>JURICOMEX</h2>
    </div><br>
    <div class="col-md-7 footer-main2">
      <h4>Gestión jurídica y comercial eficiente!</h4>
      
     
    </div>
     <div class="clearfix"> </div>
    <div class="copyright-agile">
      <p>&copy; 2020 JURICOMEX S.A.S. Todos los derechos reservados. 
      <a href="https://www.facebook.com/JURIComex/"><i class="fa fa-facebook f1" aria-hidden="true"></i></a>
      <a href="https://twitter.com/comexjuris" ><i class="fa fa-twitter f2" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com/comexjuris/?hl=es-la" ><i class="fa fa-instagram f3" aria-hidden="true"></i></a>
      </p>    

          

    </div>
  </div>
</div>
<!-- //footer -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
  </body>
</html>


 <?php
} else{
  header('location: login.php');
}
?>

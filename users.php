<?php
    
    session_start();
    if (isset($_SESSION['id'])) {?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>:: JURICOMEX | Administrador ::</title>

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
<!--// online-fonts -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      strong {

      	font-size: 2rem;

      }

      .titulo {

        text-align: center;

      }

      .footer-agile {

        margin-top: 5em;

      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
     <link href="./css/pricing.css" rel="stylesheet">
    <link href="./css/jumbotron.css" rel="stylesheet">
  </head>
  <body>
   
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><strong>Juricomex</strong></h5>
  <nav class="my-2 my-md-0 mr-md-3">
  </nav>
  <a class="btn btn-outline-primary" href="logout.php">Cerrar sesion</a>
</div>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <img class="img-thumbnail" src="images/logo_juricomex.jpg" alt="" width="150px" height="150px">
      <h1 class="display-3">Hola, <?=$_SESSION['name']?></h1>
    <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Relacion de procesos &raquo;</a></p>
    </div>
  </div><br><br>

  <div class="container">
    <!-- Example row of columns -->
    <h1 class="titulo">Procesos Juricomex s.a.s.</h1><br>
    <div class="row">
      <div class="col-md-3">
        <h2 style="text-align: center;">Inmobiliaria Juricomex</h2>
     
        <p style="text-align: center;"><a class="btn btn-secondary" href="inmobiliaria.php" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-3">
        <h2 style="text-align: center;">Juzgados laborales</h2>
        
        <p style="text-align: center;"><a class="btn btn-secondary" href="laborales1.php" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-3">
        <h2 style="text-align: center;">Pequeñas causas</h2>
        
        <p style="text-align: center;"><a class="btn btn-secondary" href="pcausas.php" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-3">
        <h2 style="text-align: center;">Tribunal superior</h2>
      
        <p style="text-align: center;"><a class="btn btn-secondary" href="tsuperior1.php" role="button">View details &raquo;</a></p>
      </div>      
    </div>

    <hr>
    <h1 class="titulo">Procesos Par iss.</h1><br>
    <div class="row">
      <div class="col-md-3">
        <h2 style="text-align: center;">Juzgados laborales</h2>
        
        <p style="text-align: center;"><a class="btn btn-secondary" href="laborales2.php" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-3">
        <h2 style="text-align: center;">Juzgado administrativo</h2>
        
        <p style="text-align: center;"><a class="btn btn-secondary" href="juzadministrativo2.php" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-3">
        <h2 style="text-align: center;">Tribunal superior</h2>
        
        <p style="text-align: center;"><a class="btn btn-secondary" href="tsuperior2.php" role="button">View details &raquo;</a></p>
      </div>
       <div class="col-md-3">
        <h2 style="text-align: center;">Tribunal administrativo</h2>
        
        <p style="text-align: center;"><a class="btn btn-secondary" href="tadministrativo2.php" role="button">View details &raquo;</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>

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


    } else {

      header('location: login.php');

}?>

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
              $stmt = $conn->prepare("SELECT * FROM tsuperior1 LIMIT 10");
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
    <title>:: JURICOMEX | Autos tribunal superior ::</title>

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

         ul {

          margin-top: 5em;  

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
    <a style="color:##b2bec3;" class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Autos</a>
  </li>
  <li class="nav-item">
    <a style="color:#2d3436;" class="nav-link" href="users.php">Administrador</a>
  </li>
  <li class="nav-item">
    <a style="color:#2d3436;" class="nav-link" href="logout.php">Cerrar sesion</a>
  </li>
</ul>

  <div class="jumbotron mt-3">
    <img class="img-thumbnail" src="images/logo_juricomex.jpg" alt="" width="150px" height="150px">
     <img class="img-thumbnail" src="images/gestion.png" alt="" width="150px" height="150px">
    <h1>Tribunal superior<br> (Juricomex)</h1>
    <p class="lead">Aqui podras gestionar todos los registros de tribunales superiores (Juricomex).</p>
    <a class="btn btn-lg btn-primary" href="createtrib1.php" role="button">Nuevo registro</a>
  </div>
</div>


 

  <br><br>
       <h2 style="color:#2d3436; text-align: center;">Listado de Autos</h2><br><br>
      <div class="table-responsive">
        <table class="table table-striped table-dark">
          <thead class="thead-dark">
            <tr>
              <th style="text-align: center;">ID</th>
              <th style="text-align: center;">Fecha_de_publicacion</th>
              <th style="text-align: center;">Radicacion</th>
              <th style="text-align: center;">Demandante</th>
              <th style="text-align: center;">Demandado</th>
              <th style="text-align: center;">Juzgado</th>
              <th style="text-align: center;">Clase_de_proceso</th>
              <th style="text-align: center;">Tema</th>
              <th style="text-align: center;">Editar</th>
              <th style="text-align: center;">Borrar</th>
              <th style="text-align: center;">Auto</th>
            </tr>
          </thead>
          <tbody>

            <?php

               foreach ($rows as $row) {
                
            ?>

            <tr>
              <td style="color:#FFFFFF; text-align: center;"><?=$row->id?></td>
              <td style="color:#FFFFFF; text-align: center;"><?=$row->fechapublicacion?></td>
              <td style="color:#FFFFFF; text-align: center;"><?=$row->radicacion?></td>
              <td style="color:#FFFFFF; text-align: center;"><?=$row->demandante?></td>
              <td style="color:#FFFFFF; text-align: center;"><?=$row->demandado?></td>
              <td style="color:#FFFFFF; text-align: center;"><?=$row->juzgado?></td>
              <td style="color:#FFFFFF; text-align: center;"><?=$row->proceso?></td>
              <td style="color:#FFFFFF; text-align: center;"><?=$row->tema?></td>
              <td style="text-align: center;"><a href="editarts1.php?id=<?=$row->id?>" class="btn btn-outline-primary">Editar</a></td>
              <td style="text-align: center;"><a href="deletets1.php?id=<?=$row->id?>" class="btn btn-outline-danger">Borrar</a></td>
              <td style="text-align: center;"><a href="<?=$row->enlace?>" class="btn btn-outline-info">Ver</a></td>
            </tr>

            <?php
            }
            ?>
            
          </tbody>
        </table>
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

</main>

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
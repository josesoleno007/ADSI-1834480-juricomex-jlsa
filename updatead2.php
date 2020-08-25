<?php
    
    session_start();

        $id = $_REQUEST['id'];
        $fechapublic = $_REQUEST['fechapublic'];
        $radicacion = $_REQUEST['radicacion'];
        $dte = $_REQUEST['dte'];
        $ddo = $_REQUEST['ddo'];
        $proceso = $_REQUEST['proceso'];
        $tema = $_REQUEST['tema'];
        $enlace = $_REQUEST['enlace'];

        $servername = "localhost";  
        $username   = "root"; 
        $password   = ""; 
        $dbname     = "juricomex";   
        
        try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              //set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $stmt = $conn->prepare("UPDATE tribunaladministrativo2 SET fechapublicacion = ?, radicacion = ?, demandante = ?, demandado = ?, tproceso = ?, tema = ?, enlace = ? WHERE id = ?");
              $stmt->execute(array($fechapublic, $radicacion, $dte, $ddo, $proceso, $tema, $enlace, $id));
             header('location: tadministrativo2.php');
          } catch(PDOexception $e) {
            echo $e->getMessage();
          }
      ?>
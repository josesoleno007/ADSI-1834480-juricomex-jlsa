<?php
    
    session_start();

        $id = $_REQUEST['id'];
        $fechapublic = $_REQUEST['fechapublic'];
        $radicacion = $_REQUEST['radicacion'];
        $dte = $_REQUEST['dte'];
        $ddo = $_REQUEST['ddo'];
        $juzgado = $_REQUEST['juzgado'];
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
              $stmt = $conn->prepare("UPDATE laborales1 SET fechapublicacion = ?, radicacion = ?, demandante = ?, demandado = ?, juzgado = ?, proceso = ?, tema = ?, enlace = ? WHERE id = ?");
              $stmt->execute(array($fechapublic, $radicacion, $dte, $ddo, $juzgado, $proceso, $tema, $enlace, $id));
             header('location: laborales1.php');
          } catch(PDOexception $e) {
            echo $e->getMessage();
          }
      ?>
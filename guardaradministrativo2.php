<?php
  session_start();
      if (isset($_SESSION['id'])) {
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
              $stmt = $conn->prepare("INSERT INTO juzadministrativo2 (fechapublicacion, radicacion, demandante, demandado, juzgado, tproceso, tema, enlace) VALUES (?,?,?,?,?,?,?,?)");
              $stmt->execute(array( $fechapublic, $radicacion, $dte, $ddo, $juzgado, $proceso, $tema, $enlace));
             header('location: juzadministrativo2.php');
          } catch(PDOexception $e) {
            echo $e->getMessage();
          }
      

        } else{

          header('location: juzadministrativo2.php');

        }
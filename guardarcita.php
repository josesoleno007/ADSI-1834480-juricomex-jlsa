<?php
  session_start();
      if (isset($_SESSION['id'])) {
        $nombre = $_REQUEST['nombre'];
        $fecha = $_REQUEST['fecha'];
        $hora = $_REQUEST['hora'];  
        $telefono = $_REQUEST['telefono'];
        $correo = $_REQUEST['correo'];       
        
        $servername = "localhost";  
        $username   = "root"; 
        $password   = ""; 
        $dbname     = "juricomex";   
        
        try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              //set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $stmt = $conn->prepare("INSERT INTO citas (nombre, fecha, hora, telefono, correo) VALUES (?,?,?,?,?)");
              $stmt->execute(array( $nombre, $fecha, $hora, $telefono, $correo));
             header('location: inmobiliaria.php');
          } catch(PDOexception $e) {
            echo $e->getMessage();
          }
      

        } else{

          header('location: inmobiliaria.php');

        }
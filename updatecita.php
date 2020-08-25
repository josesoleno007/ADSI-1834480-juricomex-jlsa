<?php
    
    session_start();

        $id = $_REQUEST['id'];
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
              $stmt = $conn->prepare("UPDATE citas SET nombre = ?, fecha = ?, hora = ?, telefono = ?,   correo = ? WHERE id = ?");
              $stmt->execute(array($nombre, $fecha, $hora, $telefono, $correo, $id));
             header('location: inmobiliaria.php');
          } catch(PDOexception $e) {
            echo $e->getMessage();
          }
      ?>
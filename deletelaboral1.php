<?php
    
    session_start();
    if (isset($_REQUEST['id']) and $_REQUEST['id'] != '' and $_REQUEST['id'] != null) { $id = $_REQUEST['id'];

        $servername = "localhost";  
        $username   = "root"; 
        $password   = ""; 
        $dbname     = "juricomex";   
        
        try {
              $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $stmt = $conn->prepare("DELETE FROM laborales1 WHERE id = ?");
              $stmt->execute(array($id));
              header('location: laborales1.php');  
              
          } catch(PDOexception $e) {
            echo $e->getMessage();
          }
          } else {
              header('location: laborales1.php');
          }
      ?>
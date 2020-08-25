<?php
session_start();
    if (isset($_POST['email']) and $_POST['email'] != '' and $_POST['email'] != null and isset($_POST['password']) and $_POST['password'] != '' and$_POST['password'] != null) {
    	
    	$email      = $_POST['email'];
    	$password1  = $_POST['password'];
        
        $servername = "localhost";  
        $username   = "root"; 
        $password   = ""; 
        $dbname     = "juricomex";   
        
        try {
        	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        	//set the PDO error mode to exception
        	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        	
            $stmt = $conn->prepare("SELECT * FROM administrador WHERE correo = ? AND password = ?");
        	

        	$stmt->execute(array($email, $password1));

        	if ($stmt->rowCount() > 0) {
        		$row = $stmt->fetch(PDO::FETCH_OBJ);

        		$_SESSION['name'] = $row->nombre;
                $_SESSION['id']   = $row->id;
        		header('location: users.php');
        	} else {
        		header('location: users.php');
        	}
        } catch(PDOexception $e) {
        	echo $e->getMessage();
        }
    } else {
    	/*** error datos ***/
    	header('location: users.php');
    }
?>    
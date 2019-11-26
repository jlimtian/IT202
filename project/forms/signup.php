# Developer: Juline Limtian, IS202-009, Fall 2019 

<?php
//error checking
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['email']) 
		&& isset($_POST['password'])
		&& isset($_POST['confirm'])){
			
		$user = $_POST['email'];
		$pass = $_POST['password'];
		$confirm = $_POST['confirm'];
		if($pass != $confirm){
				echo "Passwords don't match";
				exit();
        }
        
        try{
			//do hash of password
			$hash = password_hash($pass, PASSWORD_BCRYPT);
			require("config.php");
			//$username, $password, $host, $database
			$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
			$db = new PDO($conn_string, $username, $password);
			$stmt = $db->prepare("INSERT into `TestUsers` (`email`, `password`) VALUES(:email, :password)");
			$result = $stmt->execute(
				array(":email"=>$user,
					":password"=>$hash
				)
			);
			print_r($stmt->errorInfo());
			
			echo var_export($result, true);
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}
?>

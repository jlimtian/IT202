<?php
//error checking
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function valLogin() {
    	// echo 'hello';
	if(isset($_POST['email']) && isset($_POST['password'])) {
	// echo 'world';        
	$email = $_POST['email'];
        $password = $_POST['password'];
	// $hash = password_hash($password, PASSWORD_BCRYPT);
	require("config.php");
        
        //connect to database
        $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
        $db = new PDO($conn_string, $username, $password);
        $select_query = "select password, id from `TestUsers` where email=:username";
        $stmt = $db->prepare($select_query);
        $stmt->bindParam(':username', $email);
	$stmt->execute();
        $response = $stmt->fetch(PDO::FETCH_ASSOC);
        /*
	$response = $stmt->execute(
				array(":email"=>$email,
					":password"=>$hash
				)
			);
	*/
        //check passwords
        if(password_verify($_POST['password'] , $response['password'])) {
	    // echo 'Welcome, ' . $response["id"];
	    header('Location: ../pages/home.html');
        }
        else {
            echo 'Incorrect Login';
        }    
    }
}
valLogin();
?>

# Developer: Juline Limtian, IS202-009, Fall 2019 
<?php
//error checking
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function valLogin() {
    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        require("config.php");
        
        //connect to database
        $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
        $db = new PDO($conn_string, $email, $password);
        $select_query = "select password from `LoginPage` where email=:email";
        $stmt->db->prepare($select_query);
        $stmt->bindParam(':email', $email);
        $response = $stmt->fetch(PDO::ASSOC);
        
        //check passwords
        if($_POST['password'] == $response['password']) {
     	    $message = "Welcome, " . var_export($_POST['id'], true);
            echo "<script> alert('$message'); </script>";
	    // echo 'Welcome, ' . var_export($_POST['id'], true);
        }
        else {
            echo 'Incorrect Login';
        }    
    }
}
?>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('config.php');
echo "Loaded Host: " . $host;

$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";

try{
	$db = new PDO($conn_string, $username, $password);
	echo "Connected";
	$query = "create table if not exists `TestUsers`(
		`id` int auto_increment not null,
		`username` varchar(30) not null unique,
		`pin` int default 0,
		PRIMARY KEY (`id`)
		) CHARACTER SET utf8 COLLATE utf8_general_ci";
	$db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$stmt = $db->prepare($query);
	print_r($stmt->errorInfo());
	$r = $stmt->execute();
	echo "<br>" . $r . "<br>";

	$insert_query = "INSERT INTO `TestUsers`(`First_Name`, `Last_Name`, `Age`, `Initials`) 
					VALUES (:First_Name, :Last_Name, :Age, :Initials)";
	$stmt = $db->prepare($insert_query);
	$newFname = "Jane";
	$newLname = "Doe";
	$newAge = "10";
	$newInitials = "JD";
	$r = $stmt->execute(array(":First_Name"=> $newFname, ":Last_Name"=> $newLname, 
					":Age"=> $newAge, ":Initials"=> $newInitials));

	print_r($stmt->errorInfo());

/*	$select_query = "select * from `TestUsers` where First_Name = :First_Name";
	$stmt = $db->prepare($select_query);
	$r = $stmt->execute(array(":First_Name"=> "Billy"));
	$results = $stmt->fetch(PDO::FETCH_ASSOC);

	echo "<pre>" . var_export($results, true) . "</pre>"; */
}
catch (Exception $e){
	echo $e->getMessage();
	exit("Something went wrong");
}
?>


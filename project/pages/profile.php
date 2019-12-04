<?php
//error checking
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function view_item($id){
	require("../forms/config.php");
	$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
	$db = new PDO($conn_string, $username, $password);
	//Lookup item by id
	$query = "SELECT id, username FROM `TestUsers` WHERE id = :id";
	$stmt = $db->prepare($query);
	$r = $stmt->execute(array(":id"=>$id));
	$response = $stmt->fetch(PDO::FETCH_ASSOC);
	return $response;
}

function update_item($id, $one){
	require("../forms/config.php");
	$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
	$db = new PDO($conn_string, $username, $password);
	//Lookup post by id
	$query = "UPDATE `TestUsers` SET username = :1 WHERE id = :id";
	$stmt = $db->prepare($query);
	$r = $stmt->execute(array(
		":id"=>$id,
		":1"=>$one));
	// echo var_export($stmt->errorInfo(),true) ;
	return $r > 0;
}
?>

<?php
	//we form was submitted update table
	if(isset($_POST['id'])){
		update_item($_POST['id'], $_POST['username']);
	}
?>

<?php $row = view_item(5);?>
<?php if($row): ?>
	Set Username
	<form method="POST">
		<input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
		<input type="text" name="username" value="<?php echo $row['username'];?>" />
		<input type="submit" class="submit" name="update" value="Update"> 
		<p></p>
	</form>
<?php endif; ?>


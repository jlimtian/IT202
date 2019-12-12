<?php
//error checking
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function findPost() {
    require("../forms/config.php");
    $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
    $db = new PDO($conn_string, $username, $password);
    $select_query = "SELECT id, post FROM `TestUsers` WHERE email=:username";
    $stmt = $db->prepare($select_query);
    $stmt->bindParam(':username', $email);
	$stmt->execute();
    $response = $stmt->fetch(PDO::FETCH_ASSOC);

    echo $response["post"];
    }

function postTo() {
    require("../forms/config.php");
    $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
    $db = new PDO($conn_string, $username, $password);
    $select_query = "UPDATE `TestUsers` SET post = :1 WHERE id = :1d";
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
            update_item($_POST['id'], $_POST['post']);
    }
?>

<!DOCTYPE html>
<html lang="em">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, 
        shrink-to-fit=no">
    <!-- main.css -->
    <!-- <link rel="stylesheet" href="../styles/main.css"> -->

    <!-- main.js -->
    <script src="../styles/main.js"></script>

    <!-- Favicon and Tab Head -->
    <link rel='icon' href='../images/favicon.png' type='image/x-icon'/>
    <title>Home | XPRESS</title>
</head>

<body>
    <header>
        <div class="header" id="myHeader">
            <!-- <img src="../images/favicon.png" alt="Icon"> -->
            <h1>XPRESS</h1>
            <!-- Navigation Bar -->
            <nav id="nav_menu">
                <ul>
                    <li><a href="profile.php">Profile</a>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <h3>Welcome to the Home Page</h3>
        <form method="POST">
            <input type="text" name="post" style="width: 300px"><br>
            <input type="submit" class="sumbit" name="spost" value="Post"><br><br> 
        </form>
    </main>
    
</body>

</html>


<?php $row = findPost(5);?>
<?php if($row): ?>
        Set Username
        <form method="POST">
                <input type="text" name="post" style="width: 300px" value="<?php echo $row['post'];?>" />
                <input type="submit" class="submit" name="update" value="Update">
                <p></p>
        </form>
<?php endif; ?>


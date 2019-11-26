<?php
//error checking
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['email']) && isset($_POST['username'])) {
        
    $email = $_POST['email'];
    $username = $_POST['username'];
    require("config.php");

    //connect to database
    $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
    $db = new PDO($conn_string, $username, $password);
    // $select_query = "select password from `TestUsers` where email=:username";
    // $stmt = $db->prepare($select_query);
    $stmt = $db->prepare(UPDATE `TestUsers` SET `username'=$username);
    $stmt->bindParam(':username', $email);
    $stmt->execute();
    // $response = $stmt->fetch(PDO::FETCH_ASSOC);

    echo 'Welcome ' . $email;

    // $stmt = $db->prepare(UPDATE `TestUsers` SET `username`=$username);

    echo 'Username: ' .	var_export($_POST[username];

}

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
            <a href="../pages/index.html"> <!--<img src="../images/favicon.png" 
                alt="Icon"> --> </a>
            <h1>XPRESS</h1>
        </div>
    </header>

    <main>
        <!-- Background Image -->
        <!-- <img src="../images/background.gif" alt="Background"> -->
        <!-- User Profile -->
        <div class="profile" id="mySignUp">
            <!-- <img src="../images/background2.jpg" alt="Background"> -->
            <form method="POST">
                <h3>User Profile</h3><br><br>
                <div class="form" id="myForm">
                    <!-- Get Username -->
                    <label for="username">Set Username</label><br>
                    <input type="text" placeholder="myusermane" name="username"><br><br>
                    <!-- Sign Up -->
                    <input type="submit" class="submit" name="usernmame" value="submit">
                        Update</button><br>
                </div>
            </form>
        </div>
    </main>

</body>

<footer>
    <div class="footer" id="myFooter">
            <!-- <span class="text-muted">&copy; Juline Limtian, 2019 |  
                Terms Of Use  |  Privacy Statement</span> -->
    </div>
</footer>

</html>

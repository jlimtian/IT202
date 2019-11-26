<!-- Developer: Juline Limtian, IS202-009, Fall 2019 -->
<?php
    include("../forms/signin.php");
    valLogin();
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
    <title>Sign Up | XPRESS</title>
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
        <!-- Sign In Form -->
        <div class="signUp" id="mySignUp">
            <!-- <img src="../images/background2.jpg" alt="Background"> -->
            <form action="../forms/signup.php" method="POST">
                <h3>Sign Up</h3><br><br>
                <div class="form" id="myForm">
                    <!-- Get Login Email -->
                    <label for="email">Email</label><br>
                    <input type="email" placeholder="myemail@email.com" name="email"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br><br>
                    <!-- Get Password -->
                    <label for="password">Set Password</label><br>
                    <input type="password" placeholder="mypassword" name="password" 
                    required><br><br>
                    <label for="password">Re-Enter Password</label><br>
                    <input type="password" placeholder="mypassword" name="confirm" 
                    required><br><br>
                    <!-- Sign Up -->
                    <input type="submit" class="submit" name="signUp" value="Sign Up"><br>
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

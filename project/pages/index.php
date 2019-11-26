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
    <title>Sign In | XPRESS</title>
</head>

<body>
    <header>
	<div class="header" id="myHeader">
            <!-- <img src="../images/favicon.png" alt="Icon"> -->
            <h1>XPRESS</h1>
        </div>
    </header>

    <main>
	<!-- Background Image -->
        <!-- <img src="../images/background.gif" alt="Background"> -->
        <!-- Sign In Form -->
        <div class="signin" id="mySignIn">
            <!-- <img src="../images/background2.jpg" alt="Background"> -->
            <form action="../forms/signin.php" method="POST">
		<h3>Sign In</h3><br><br>
                <div class="form" id="myForm">
                    <!-- Login Email -->
                    <label for="email">Email</label><br>
                    <input type="email" id="email" placeholder="myemail@email.com" name="email"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br><br>
                    <!-- Password -->
                    <label for="password">Password</label><br>
                    <input type="password" id="password" placeholder="mypassword" name="password" 
                    required><br><br>
                    <!-- Sign In / Sign Up (links to another page/form) -->
                    <input type="submit" class="submit" name="signIn" value="Sign In"><br><br>
                    <button onclick="window.location.href = '../pages/signup.php';" 
                        type="submit" class="submit" name="signUp" value="submit">
                        Sign Up</button><br>
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

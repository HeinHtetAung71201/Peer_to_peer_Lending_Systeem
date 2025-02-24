<?php
    session_start();
    if(isset($_SESSION['error'])){
        echo "<script>alert('". $_SESSION['error'] ."');</script>";
        unset($_SESSION['error']);
    }
    session_unset();
?>
<!-- HTML Sign Up Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- <h2>Sign Up</h2> -->
    <form method="POST" action="SignUp.php">
    <div class="container" onclick="onclick">
        <div class="top"></div>
            <div class="bottom"></div>
            <div class="center">

                <h2>SIGN UP </h2>
                <input type="text" name="username" placeholder="Username:" required>
                <input type="email" name="email" placeholder="email" required>
                <input type="password" name="password" placeholder="password" requried>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>

                <div class="">
                <span>Do you have account?</span>
                <a class="" style="margin-left:10px; text-decoration:none;" href="loginForm.php">Login</a>
                </div>
                <button class="btn" role="button"><spam class="text">Sign Up</spam></button>
                <h2>&nbsp;</h2>
            </div>   
        </div>
    </div>
    </form>
</body>
</html>

<?php
    session_start();
    if(isset($_SESSION['error'])){
        echo "<script>alert('". $_SESSION['error'] ."');</script>";
        unset($_SESSION['error']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
   
</head>
<body>
<form action="Login.php" method="POST">
    <div class="container" onclick="onclick">
        <div class="top"></div>
            <div class="bottom"></div>
            <div class="center">

                <h2>LOGIN</h2>
                <input type="email" name="email" placeholder="email" required>
                <input type="password" name="password" placeholder="password" requried>
                <div class="">
                <span>Don't you have account?</span>
                <a class="" style="margin-left:10px; text-decoration:none;" href="index.php">Sign Up</a>
                </div>
                <button class="btn" role="button"><spam class="text">Login</spam></button>
                <h2>&nbsp;</h2>
            </div>   
        </div>
    </div>
</form>
</body>
</html>

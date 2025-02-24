<?php

require_once "components/db.php"; // Include database connection file
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    $conPassword= $_POST['confirm_password'];

    if($password==$conPassword && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $stmt= $conn->prepare("insert into users (name,email,PASSWORD) values (?,?,?);") ;
        // $stmt = $conn->prepare($sql);
        // $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $password);
        if ($stmt->execute()) {
            header("Location: loginForm.php");
            // echo "<script>alert('Borrower Registered Successfully!'); window.location='borrower_register.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }
    
        $stmt->close();
        $conn->close();
    }
    else{
        $_SESSION['error']="Does not match the passwords.";
        header("Location: index.php");
        exit();
    }
    
}
?>

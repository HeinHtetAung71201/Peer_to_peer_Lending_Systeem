<?php
include 'components/db.php';
session_start();
// echo $_SESSION['userId'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $borrower_id = $_SESSION['userId'];  // Assume user is logged in (replace with session)
    $amount = $_POST['amount'];
    $interest_rate = $_POST['interest_rate'];
    $duration= $_POST['duration'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $name=$_POST['name'];
    $profit= $amount*$interest_rate*$duration;

    $sql = "INSERT INTO loans (borrower_id,address, amount, interest_rate, status,duration,name,email,profit) 
            VALUES ('$borrower_id','$address', '$amount', '$interest_rate', 'pending','$duration','$name','$email',$profit)";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Loan request submitted successfully! '); window.location.href='CreditReg.php';</script>";
        } else {
            echo "Error: " . $conn->error;
        }
       

}
?>

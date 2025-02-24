<?php
include 'db_connect.php';
session_start();
if (isset($_GET['loan_id'])) {
    $loan_id = $_GET['loan_id'];
    $lender_id = $_SESSION['id'];  // Assume logged-in lender (replace with session)

    $sql = "UPDATE loans SET lender_id = '$lender_id', status = 'approved' WHERE loan_id = '$loan_id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Loan approved successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!-- C:\Users\User\Desktop\Xampp\htdocs\project_show\approve_loan.php -->
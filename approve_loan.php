<?php
include 'components/db.php';
session_start();
// echo $_SESSION['userId'];
if (isset($_GET['loan_id'])) {
    $loan_id = $_GET['loan_id'];
    $lender_id = $_SESSION['userId'];  // Assume logged-in lender (replace with session)

    $sql = "UPDATE loans SET lender_id = '$lender_id', status = 'approved' WHERE loan_id = '$loan_id'";
   
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Loan approved successfully!'); window.location.href='transaction.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }

   
}
?>

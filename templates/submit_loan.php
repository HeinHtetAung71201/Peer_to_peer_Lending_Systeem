<?php

include 'db_connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $borrower_id = 1;  // Assume user is logged in (replace with session)
    $amount = $_POST['amount'];
    $interest_rate = $_POST['interest_rate'];

    $sql = "INSERT INTO loans (borrower_id, amount, interest_rate, status) 
            VALUES ('$borrower_id', '$amount', '$interest_rate', 'pending')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Loan request submitted successfully! '); window.location.href='transaction.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $amount = $_POST['amount'];
    $interest_rate = $_POST['interest_rate'];
    $duration = $_POST['duration'];
    $lender_date=$_POST['lender_date'];

    // Borrower Table ထဲကို Data သိမ်းခြင်း
    $sql_insert = "INSERT INTO lender(name, email, address, phone, amount, interest_rate,duration,lender_date) 
                   VALUES ('$name', '$email', '$address', '$phone', '$amount', '$interest_rate','$duration','$lender_date')";
    
    if ($conn->query($sql_insert) === TRUE) {
        echo "<h3>Lender Registered Successfully!</h3>";

        // Lender Table ထဲက ကိုက်ညီသူများကို Query
        $sql_match = "select distinct borrower.* from borrower,lender where borrower.interest_rate>=$interest_rate and borrower.amount<=$amount";
        $result = $conn->query($sql_match);

        if ($result->num_rows > 0) {
            echo "<h3>Matching Lenders:</h3>";
            echo "<table class='table table-bordered'>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Amount Available</th>
                        <th>Interest Rate</th>
                        <th>Duration</th>
                        
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['phone']}</td>
                        <td>\${$row['amount']}</td>
                        <td>{$row['interest_rate']}%</td>
                        <td>{$row['duration']}months</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No Borrower available matching your request.</p>";
        }
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
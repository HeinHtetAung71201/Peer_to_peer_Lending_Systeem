<?php
    include "db_connect.php";
          
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Transaction Record</title>
            </head>
            <body>
            <table class="table table-bordered">
        <thead>
            <tr>
                <th>Loan ID</th>
                <th>Amount ($)</th>
                <th>Lender_id</th>
                <th>Interest Rate (%)</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM loans ORDER BY created_at DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['loan_id']}</td>
                    <td>{$row['amount']}</td>
                    <td>{$row['lender_id']}</td>
                    <td>{$row['interest_rate']}</td>
                    <td>{$row['status']}</td>
                   
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

            </body>
            </html>
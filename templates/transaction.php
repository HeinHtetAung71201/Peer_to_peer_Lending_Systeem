<?php
include 'db_connect.php'; // Database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2P Lending System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">P2P Lending System</h2>

    <!-- Loan Submission Form -->
    <form action="submit_loan.php" method="POST" class="p-4 border rounded shadow-sm">
        <h4>Request a Loan</h4>
        <div class="mb-3">
            <label for="amount" class="form-label">Loan Amount ($)</label>
            <input type="number" class="form-control" name="amount" required>
        </div>
        <div class="mb-3">
            <label for="interest_rate" class="form-label">Interest Rate (%)</label>
            <input type="number" name="interest_rate" class="form-control" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit Loan Request</button>
    </form>

    <!-- Loan Requests Table -->
    <h4 class="mt-5">Existing Loan Requests</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Loan ID</th>
                <th>Amount ($)</th>
                <th>Interest Rate (%)</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM loans ORDER BY created_at DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['loan_id']}</td>
                    <td>{$row['amount']}</td>
                    <td>{$row['interest_rate']}</td>
                    <td>{$row['status']}</td>
                    <td>
                        <a href='approve_loan.php?loan_id={$row['loan_id']}' class='btn btn-success btn-sm'>Approve</a>
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>

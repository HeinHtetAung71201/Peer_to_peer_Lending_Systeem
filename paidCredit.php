<?php
    include 'components/db.php';
    session_start();
    if(isset($_GET['loan_id'])){
        $credit_id=$_GET['loan_id'];
        // $lender_id=$_SESSION['lender_id'];
         $sql = "UPDATE creditsrec SET  status = 'Paid' WHERE id = $credit_id";
        if($conn->query($sql)===TRUE){
        echo "<script>alert('Paid successfully!'); window.location.href='CreditRec.php';</script>";
            
        }
        else{
            echo "Erro: ". $conn->error;
        }
    }
?>
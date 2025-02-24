<?php
    include 'components/db.php';
    session_start();
    // echo $_SESSION['userId'];
                                                $query=$conn->query('select borrower_id from loans where lender_id='.$_SESSION['userId']);
                                                if($query->num_rows>0){
                                                    while($entries= $query->fetch_assoc()){
                                                        $borrower_id=$entries['borrower_id'];
                                                        // echo $lender_id;
                                                    }
                                                }
                                                // echo $lender_id;
                                                $LenderInfo=$conn->query('select * from users where id='.$_SESSION['userId']);
                                                if($LenderInfo->num_rows>0){
                                                    while($LInfo=$LenderInfo->fetch_assoc()){
                                                        $lenderName= $LInfo['name'];
                                                        $lenderEmail= $LInfo['email'];
                                                        // echo $lenderName;

                                                    }
                                                }
                                                $Data=$conn->query('select amount,interest_rate,status,duration from loans where lender_id='.$_SESSION['userId']);
                                                if($Data->num_rows>0){
                                                    while($data=$Data->fetch_assoc()){
                                                        $amt=$data['amount'];
                                                        $rate=$data['interest_rate'];
                                                        $duration=$data['duration'];
                                                        $status=$data['status'];
                                                    }
                                                }


//      $stmt =$conn->query('SELECT * FROM loans WHERE status = "approved" AND borrower_id = ' .$lender_id ) ;
//      $sqli = $conn->query("SELECT users.name,users.id,users.email from users, loans WHERE loans.lender_id= users.id;");
//       if($sqli->num_rows>0){
//           while($querys= $sqli->fetch_assoc()){
//               $namae=$querys['name'];
//               $_SESSION['lender_name']=$namae;
//               $email=$querys['email'];
//               $_SESSION['lender-email']=$email;
//               // echo $email;
//               $_SESSION['lender_id']=$querys['id'];
//           }
//       }
//       // Process the results
//       if ($stmt->num_rows > 0) {
//           while ($row = $stmt->fetch_assoc()) {
//               // <th>Borrower Name</th>
//               // <th>Email</th>
//               // <th>Amount ($)</th>
//               // <th>Interest Rate (%)</th>
//               // <th>Address</th>
//               // <th>Created_at</th>
//               // <th>Duration (Months)</th>
//               // <th>Profits</th>
//               // <th>Status</th>
//               // <th>Action</th>
//               //Data to be inserted
//             //   function calcProfit($principal,$Rate,$months){
                 
//             //       return $principal*$Rate*$months;
//             //   }
//               $amt=$row['amount'];
//             //   echo $amt;
//               $rate=$row['interest_rate'];
//             //   echo $rate;
//               $address=$row['address'];
//             //   echo $address;
//               $createdAt=$row['created_at'];
//               // echo $createdAt;
//               $duration=$row['duration'];
//               // echo $duration;
//             //   $interest= calcProfit($amt,$rate,$duration);
//               // echo $interest;
//               // $status=$row['status'];
        $interest=$amt*$rate*$duration;
        
//  }      
        // $borrower_id=$_SESSION['userId'];
        // echo $borrower_id;
        $stmtq = "INSERT INTO creditsrec (lender_name,lender_email,loan_amt,rate,duration,interest,status,borrower_id)
        VALUES ('$lenderName','$lenderEmail',$amt,$rate,$duration,$interest,'borrowed',$borrower_id)";
        // Execute query
        if (mysqli_query($conn, $stmtq)) {
        // echo "Record inserted successfully.";
        header('Location: LoanReq.php');
        } else {
        echo "Error: " . mysqli_error($conn);
        }
 
?>
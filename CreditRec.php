<?php  
    require_once "components/db.php";
    session_start();
    // echo $_SESSION['userId'];
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="stylling/theme.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mediaQueries.css">
    <link rel="stylesheet" href="vendor/feather-icons-web/feather.css">
    <!-- <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css"> -->
</head>
<body>
    <div class=" container-fluid">
        <!-- <div class=""></div> -->
        <div class="row">
            <div class="col-12  col-xl-2 col-lg-3 vh-100 sideBar pt-2">
                <!-- menu side bar -->
                <div class="row">
                    <div class="col-12 logodiv">
                        <div class="d-flex p-2 justify-content-between align-items-center ">
                            <div class="logo bg-primary text-light rounded pt-1 px-1">
                                <i class=" feather-shopping-bag " style="font-size: 32px;"></i>
                                
                            </div>
                            <span class=" text-uppercase  text-primary me-lg-4 me-md-2 ms-2" style="    font-weight: 600;">P2P Lending System</span>

                            <div class="closebtn btn p-0 d-lg-none d-block ">
                                <i class=" feather-x text-dark" style="font-size: 2em;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="col-12 rounded dash text-black">
                            <div>
                                <i class=" feather-home"></i>
                            <a href="Dashboard.php" > Dashboard</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul>
                                <li class="menu-Item-title  text-secondary">
                                    Loan Management
                                </li>
                               
                                <!-- <li class="menu-Item-links">
                                   <div>
                                    <i class=" feather-plus-circle"></i>
                                    <a href="addItems.html" class="">Existing Loan Request</a>
                                   </div>
                                 </li> -->
                                 <li class="menu-Item-links ">
                                   <div>
                                    <i class=" feather-calendar"></i>
                                    <a href="loanRec.php" class="">Loan Record</a>
                                   </div>
                                    <!-- <span class=" badge pill bg-info">15</span> -->
                                </li>
                                <li class="menu-Item-links">
                                   <div>
                                    <i class=" feather-calendar"></i>
                                    <a href="LoanReq.php" class="">Loan Request</a>
                                   </div>
                                    <span class=" badge pill bg-info">15</span>
                                </li>
                                <li class="menu-Item-spacer"></li>
                                <li class="menu-Item-title  text-secondary">
                                    Credit Management
                                </li>
                                <li class="menu-Item-links">
                                   <div>
                                    <i class=" feather-calendar"></i>
                                    <a href="CreditReg.php" class="">Credit Registration</a>
                                   </div>
                                    
                                </li>
                                <li class="menu-Item-links  rounded dash bg-primary text-white active">
                                   <div>
                                    <i class=" feather-calendar"></i>
                                    <a href="" class="text-white">Credit Record</a>
                                   </div>
                                    
                                </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-10 col-lg-9 vh-100 content p-2">
                <?php include "components/roofBar.php";?>
            
                <div class="row">
                    <!-- <div class="row"> -->
                            <div class="col-12 pt-2">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></li>
                                    <!-- <li class="breadcrumb-item"><a href="datalist.html">/a></li> -->
                                    <li class="breadcrumb-item active" aria-current="page">Credit Record</li>
                                    </ol>
                                </nav>
                            </div>
                    <!-- </div> -->
                </div>
                <div class="row">
                    <div class="col-12 col-lg-11">
                        <div class=" card">
                            <div class="card-body">
                                 <div class="headerSection d-flex justify-content-between align-items-center">
                                     <div class="logo d-inline-flex align-items-center">
                                         <i class=" feather-plus-circle text-primary" style=" font-size:1.5em"></i>
                                         <h4 class=" mb-0 ms-2">Credit Records</h4>
                                     </div>
                                 <div>
                                     <button class=" btn-outline-primary d-flex align-items-center p-1">
                                         <i class=" feather-menu "></i>
                                     </button>
                                 </div>
                                 </div>
                                 <hr>
                                 <h4 class="mt-5">Credit Records</h4>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th>Lender Name</th> -->
                                                <th>Lender Name</th>
                                                <th>Email</th>
                                                <th>Amount</th>
                                                <th>Interest Rate(%)</th>
                                                <!-- <th>Address</th> -->
                                                <th>Created_at</th>
                                                <th>Duration(Months)</th>
                                                <th>Interest</th>
                                                <th>Status</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // echo $_SESSION['userId'];
                                            //     $query=$conn->query('select lender_id from loans where borrower_id='.$_SESSION['userId']);
                                            //     if($query->num_rows>0){
                                            //         while($entries= $query->fetch_assoc()){
                                            //             $lender_id=$entries['lender_id'];
                                            //         }
                                            //     }
                                            //     $LenderInfo=$conn->query('select * from user where id='.$lender_id);
                                            //     if($LenderInfo->num_rows>0){
                                            //         while($LInfo=$LenderInfo->fetch_assoc()){
                                            //             $lenderName= $LInfo['name'];
                                            //             $lenderEmail= $LInfo['email'];
                                            //         }
                                            //     }
                                            //     $Data=$conn->query('select amount,interest_rate,duration from loan where lender_id='.$lender_id);
                                            //     if($Data->num_rows>0){
                                            //         while($data=$Data->fetch_assoc()){
                                            //             $amt=$data['amount'];
                                            //             $rate=$data['interest_rate'];
                                            //             $duration=$data['duration'];
                                            //         }
                                            //     }
                                               $stmt =$conn->query('SELECT * FROM creditsrec WHERE borrower_id = ' . $_SESSION['userId']) ;
                                            //    $sql = $conn->query("SELECT users.name,users.id,users.email from users, loans WHERE loans.lender_id= users.id;");
                                            //     if($sql->num_rows>0){
                                            //         while($querys= $sql->fetch_assoc()){
                                            //             $namae=$querys['name'];
                                            //             $_SESSION['lender_name']=$namae;
                                            //             $email=$querys['email'];
                                            //             $_SESSION['lender-email']=$email;
                                            //             // echo $email;
                                            //             $_SESSION['lender_id']=$querys['id'];
                                            //         }
                                            //     }
                                                // Process the results
                                                if ($stmt->num_rows > 0) {
                                                    while ($row = $stmt->fetch_assoc()) {
                                                        // <th>Borrower Name</th>
                                                        // <th>Email</th>
                                                        // <th>Amount ($)</th>
                                                        // <th>Interest Rate (%)</th>
                                                        // <th>Address</th>
                                                        // <th>Created_at</th>
                                                        // <th>Duration (Months)</th>
                                                        // <th>Profits</th>
                                                        // <th>Status</th>
                                                        // <th>Action</th>
                                                        //Data to be inserted
                                                        // function calcProfit($principal,$Rate,$months){
                                                           
                                                        //     return $principal*$Rate*$months;
                                                        // }
                                                        $namae=$row['lender_name'];
                                                        // echo $namae;
                                                        $email=$row['lender_email'];
                                                        $amt=$row['loan_amt'];
                                                        // echo $amt;
                                                        $rate=$row['rate'];
                                                        // echo $rate;
                                                        // $address=$row['address'];
                                                        // echo $address;
                                                        $createdAt=$row['created_at'];
                                                        // echo $createdAt;
                                                        $duration=$row['duration'];
                                                        $interest=$row['interest'];
                                                        // echo $duration;
                                                        // $interest= calcProfit($amt,$rate,$duration);
                                                        // echo $interest;
                                                        $status=$row['status'];
                                                        
                                                        
                                                    //    $result= $amt*$rate*$duration;
                                                       
                                                        
                                                        

                                                        echo "<tr>  
                                                                     <td>{$namae}</td>
                                                                     <td>{$email}</td>
                                                                     <td>{$amt}</td>
                                                                     <td>{$rate}</td>
                                                                    
                                                                     <td>{$createdAt}</td>

                                                                     <td>{$duration}</td>
                                                                     <td>
                                                                     
                                                                        {$interest}
                                                                     </td>
                                                                     <td>{$status}</td>
                                                                     <td>
                                                                         <button>
                                                                             <a href='paidCredit.php?loan_id={$row['id']}' class='btn btn-success btn-sm'>Paid</a>
                                                                         </button>
                                                                     </td>
                                                                 </tr>";
                                                        // echo "Loan ID: " . $loan['id'] . "<br>";
                                                        // echo "Amount: " . $loan['amount'] . "<br>";
                                                        // echo "Interest Rate: " . $loan['interest_rate'] . "<br>";
                                                        // echo "Status: " . $loan['status'] . "<hr>";
                                                    }
                                                } else {
                                                    echo "No approved borrowed found for this lender.";
                                                }
                                                
                                                // Close the statement and connection
                                                $stmt->close();
                                                $conn->close();
                                            // Check if results exist
                                                // if ($stmt->num_rows > 0) {
                                                //     // Fetch and display data
                                                //     while ($row = $stmt->fetch_assoc()) {
                                                //         echo "<tr>
                                                //                      <td>{$row['name']}</td>
                                                //                      <td>{$row['email']}</td>
                                                //                      <td>{$row['amount']}</td>
                                                //                      <td>{$row['interest_rate']}</td>
                                                //                      <td>{$row['address']}</td>
                                                //                      <td>{$row['created_at']}</td>

                                                //                      <td>{$row['status']}</td>
                                                //                      <td>
                                                //                          <button>
                                                //                              <a href='approve_loan.php?loan_id={$row['loan_id']}' class='btn btn-success btn-sm'>Approve</a>
                                                //                          </button>
                                                //                      </td>
                                                //                  </tr>";


                                                        // echo "ID: " . $row["id"] . "<br>";
                                                        // echo "Email: " . $row["email"] . "<br>";
                                                        // echo "Amount: $" . $row["amount"] . "<br>";
                                                        // echo "Interest Rate: " . $row["interest_rate"] . "%<br>";
                                                        // echo "Status: " . $row["status"] . "<hr>";
                                                //     }
                                                // } else {
                                                //     echo "No results found.";
                                                // }

                                                // // Close connection
                                                // $conn->close();

                                            // $borrower_id=$_SESSION['userId'];
                                            // $result = $conn->query("SELECT borrower.id, borrower.email,loans.amount,loans.interest_rate,loans.status FROM loans, borrower WHERE loans.borrower_id=borrower.id;");
                                           
                                            //     // echo "not empty";
                                            //     while ($row = $result->fetch_assoc()) {
                                            //         echo "<tr>
                                            //             <td>{$row['borrower.id']}</td>
                                            //             <td>{$row['borrower.email']}</td>
                                            //             <td>{$row['loans.amount']}</td>
                                            //             <td>{$row['loans.interest_rate']}</td>
                                            //             <td>{$row['loans.status']}</td>
                                            //             <td>
                                            //                 <button>
                                            //                     <a href='approve_loan.php?loan_id={$row['loan_id']}' class='btn btn-success btn-sm'>Approve</a>
                                            //                 </button>
                                            //             </td>
                                            //         </tr>";
                                            //     }
                                           
                                            ?>
                                        </tbody>
                                    </table>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="vendor/waypoint/lib/jquery.waypoints.min.js"></script>
    <script src="vendor/Counter-Up-master/jquery.counterup.js"></script>
    <script src="vendor/chart_js/Chart.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/autoscroll.js"></script>
</body>
</html>
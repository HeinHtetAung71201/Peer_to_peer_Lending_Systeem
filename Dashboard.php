<?php  
    include 'components/db.php';
    session_start();
    $lender = "SELECT COUNT(*) as total FROM creditsrec where borrower_id=". $_SESSION['userId'];
                                            $result = $conn->query($lender);

                                            if ($result) {
                                                // Fetch the result row as an associative array
                                                $row = $result->fetch_assoc();
                                               $totLender= $row['total'];
                                            } else {
                                                echo 0;
                                            }
    $borrower = "SELECT COUNT(*) as total FROM loans where lender_id=". $_SESSION['userId'];
                                            $resBorrower= $conn->query($borrower);
                                            if($resBorrower){
                                                $rowB= $resBorrower->fetch_assoc();
                                                $totBorrower=$rowB['total'];
                                            }

    $profit = "SELECT SUM(profit) AS total FROM loans WHERE borrower_id =". $_SESSION['userId'];
                                            $resProfit= $conn->query($profit);
                                            if($resProfit){
                                                $rowP= $resProfit->fetch_assoc();
                                                $totProfit=$rowP['total'];
                                                // echo $totProfit;
                                            }
    
                                            $iquery = "SELECT SUM(loan_amt) AS total FROM creditsrec WHERE status = 'borrowed' and borrower_id= ". $_SESSION['userId'];
                                            $resInt= $conn->query($iquery);
                                            if($resInt){
                                                $rowInt= $resInt->fetch_assoc();
                                                $totInterest=$rowInt['total'];
                                                // echo $totProfit;
                                            }
                                            
    
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
                        <div class="col-12 rounded  dash bg-primary text-white active">
                            <div>
                                <i class=" feather-home"></i>
                            <a href="Dashboard.php" class="text-white"> Dashboard</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul>
                                <li class="menu-Item-title  text-secondary">
                                    Loan Management
                                </li>
                                <!-- <li class="menu-Item-links rounded dash bg-primary text-white active">
                                   <div>
                                    <i class=" feather-calendar"></i>
                                    <a href="loanRegister.php" class="text-white">Loan Registration</a>
                                   </div>
                                     <span class=" badge pill bg-info">15</span> -->
                                <!-- </li> --> 
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
                                <li class="menu-Item-links">
                                   <div>
                                    <i class=" feather-calendar"></i>
                                    <a href="CreditRec.php" class="">Credit Record</a>
                                   </div>
                                    
                                </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-10 col-lg-9 vh-100 content p-2">
                <?php include "components/roofBar.php";?>
                <div class="row mt-3">
                    <div class="col-12 mb-3 col-md-6 col-lg-6 col-xl-3 ">
                        <div class=" card status-card" onclick="link('')">
                            <div class=" card-body text-center">
                                <div class="row  align-items-center">
                                    <div class="col-3">
                                        <i class="feather-users text-primary" style="font-size: 3em;"></i>
                                    </div>
                                    <div class="col-9 ">
                                        <p class="mb-0 h3 counter">
                                            <?php echo $totLender;?>
                                        </p>
                                        <p class="mb-0">Total Lender</p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-12 mb-3 col-md-6 col-lg-6 col-xl-3 ">
                        <div class=" card status-card" onclick="link('')">
                            <div class=" card-body text-center">
                                <div class="row  align-items-center">
                                    <div class="col-3">
                                        <i class="feather-users text-primary" style="font-size: 3em;"></i>
                                    </div>
                                    <div class="col-9 ">
                                        <p class="mb-0 h3 counter">
                                        <?php  echo $totBorrower?>
                                        </p>
                                        <p class="mb-0">Total Borrower</p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-12 mb-3 col-md-6 col-lg-6 col-xl-3 ">
                        <div class=" card status-card" onclick="link('')">
                            <div class=" card-body text-center">
                                <div class="row  align-items-center">
                                    <div class="col-3">
                                        <i class="feather-dollar-sign text-primary" style="font-size: 3em;"></i>
                                    </div>
                                    <div class="col-9 ">
                                        <p class="mb-0 h3 counter">
                                            <?php echo $totProfit; ?>
                                        </p>
                                        <p class="mb-0">Total Profit</p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-12 mb-3 col-md-6 col-lg-6 col-xl-3 ">
                        <div class=" card status-card" onclick="link('')">
                            <div class=" card-body text-center">
                                <div class="row  align-items-center">
                                    <div class="col-3">
                                        <i class="feather-dollar-sign text-primary" style="font-size: 3em;"></i>
                                    </div>
                                    <div class="col-9 ">
                                        <p class="mb-0 h3 counter">
                                            <?php echo $totInterest;?>
                                        </p>
                                        <p class="mb-0">Total Credit</p>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <!-- <div class="hrline w-100 p-3 "></div> -->
                    
                </div>
                <div class="row mt-3" >
                    <div class='mb-3'>
                        <h4>Interest Calculations</h4>
                    </div>
                    <div class="col-12 mb-3 col-md-6 col-lg-6 col-xl-4 ">
                        <div class="card border " style="width: 18rem; height:287px; ">
                            <div class="card-body">
                                <h5 class="card-title">Simple Interest Calculation</h5> 
                                <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
                                <p class="card-text">Simple interest is the interest computed only on the original principal, or the initial amount of money invested or borrowed. It does not take into account any interest that has accumulated over time.</p>
                                <a href="simpleInterest.php" class="btn btn-primary" id="openPopupBtn">Calculate</a>
                                <!-- <a href="#" class="btn btn-primary">Another link</a> -->
                            </div>
                        </div>  
                    </div>
                
                    
                    <div class="col-12 mb-3 col-md-6 col-lg-6 col-xl-4 ">
                        <div class="card border " style="width: 18rem; height:287px;">
                            <div class="card-body">
                                <h5 class="card-title">Monthly Payment Calculation (EMI)</h5>
                                <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
                                <p class="card-text">Borrowers repay the loan in fixed monthly installments that cover both the principal and interest. This method is known as Equal Monthly Installments (EMIs).</p>
                                <a href="EMI.php" class="btn btn-primary">Calculate</a>
                                <!-- <a href="#" class="btn btn-primary">Another link</a> -->
                            </div>
                        </div>  
                    </div>
                    <div class="col-12 mb-3 col-md-6 col-lg-6 col-xl-4 ">
                        <div class="card border " style="width: 18rem; height:287px; ">
                            <div class="card-body">
                                <h5 class="card-title">Total Interest Paid Over the Loan Term</h5>
                                <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> -->
                                <p class="card-text">The total interest paid is the sum of all interest payments over the entire life of the loan. It is determined by multiplying the EMI by the number of payments.</p>
                                <a href="OverLoan.php" class="btn btn-primary">Calculate</a>
                                <!-- <a href="#" class="card-link">Another link</a> -->
                            </div>
                        </div>  
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
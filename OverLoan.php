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
                        <div class="col-12  rounded dash bg-primary text-white active">
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
                                <!-- <li class="menu-Item-links ">
                                   <div>
                                    <i class=" feather-calendar"></i>
                                    <a href="loanRegister.php" class="text-white">Loan Registration</a>
                                   </div>
                                    
                                </li> -->
                                <li class="menu-Item-links">
                                   <div>
                                    <i class=" feather-calendar"></i>
                                    <a href="loanRec.php" class="">Loan Record</a>
                                   </div>
                                    <!-- <span class=" badge pill bg-info">15</span> -->
                                </li>
                                <li class="menu-Item-links ">
                                   <div>
                                    <i class=" feather-calendar"></i>
                                    <a href="LoanReq.php" class="">Loan Request</a>
                                   </div>
                                 </li> 
                                 
                                <!-- <li class="menu-Item-links">
                                   <div>
                                    <i class=" feather-calendar"></i>
                                    <a href="LoanReq.php" class="">Loan Request</a>
                                   </div>
                                    <span class=" badge pill bg-info">15</span>
                                </li> -->
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
            
                <div class="row">
                    <!-- <div class="row"> -->
                            <div class="col-12 pt-2">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="Dashboard.php">Dashboard</a></li>
                                    <!-- <li class="breadcrumb-item"><a href="datalist.html">Loan Management</a></li> -->
                                    <li class="breadcrumb-item active" aria-current="page">Total Interest Paid Over the Loan Term</li>
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
                                         <h4 class=" mb-0 ms-2">Total Interest Paid Over the Loan Term</h4>
                                     </div>
                                 <div>
                                     <button class=" btn-outline-primary d-flex align-items-center p-1">
                                         <i class=" feather-menu "></i>
                                     </button>
                                 </div>
                                 </div>
                                 <hr>
                                 <form action="" method="post" id="interestForm ">
                                    
                                    <div class=" form-group">
                                         <div class="row">
                                             <div class="col-12 col-lg-6">
                                                <div class="mt-2">
                                                    <label for="" class=" form-label text-secondary">Principal Amount</label>
                                                    <input type="text" name="amt" id="principal" class=" form-control" value="">
                                                </div>
                                                <div class="mt-2">
                                                <label for="" class=" form-label text-secondary d-block">Interest Rates</label>
                                                        <select name="interest_rate" id="annualRate" class=" form-control form-select custom-select">
                                                            <option selected disabled>Select Rates</option>
                                                            <option value="0.2">20%</option>
                                                            <option value="0.3">30%</option>
                                                            <option value="0.4">40%</option>
                                                            <option value="0.5">50%</option>
                                                        </select>

                                                </div>
                                                <div class="mt-2">
                                                    <label for="" class=" form-label text-secondary">Duration(Months)</label>
                                                    <input type="text" name="duratin" class=" form-control" id="duration" >
                                                </div>
                                               
                                               
                                                 
                                             </div>
                                             <!-- <div class="col-12 col-lg-6">
                                                 <div class="row mt-2">
                                                     <div class="col-12 col-lg-6 ">
                                                        <label for="" class=" form-label text-secondary d-block">Interest Rates</label>
                                                        <select name="interest_rate" id="Category" class=" form-control form-select custom-select">
                                                            <option selected disabled>Select Rates</option>
                                                            <option value="0.2">20%</option>
                                                            <option value="0.3">30%</option>
                                                            <option value="0.4">40%</option>
                                                            <option value="0.5">50%</option>
                                                        </select>
                                                     </div>
                                                     <div class="col-lg-6 col-12">
                                                     <label for="" class=" form-label text-secondary">Duration (Months)</label>
                                                    <input type="number" name="duration" class=" form-control" >
                                                     </div>
                                                 </div>
                                                 <div class="row mt-2">
                                                     <div class="col-12">
                                                     <label for="" class=" form-label text-secondary">Loan Amount (Min)</label>
                                                    <input type="number" name="amount" class=" form-control" >
                                                   </div>
                                                   <div class="col-12 mt-2">
                                                   <label for="" class=" form-label text-secondary">Phone Number</label>
                                                    <input type="number" name="phone" class=" form-control" >
                                                   </div>
                                                 </div>
                                             </div> -->
                                         
                                         </div>
                                    </div>
                                   <div class="row mt-3">
                                     <div class="footerSection">
                                         <button class="btn btn-primary " id="calculateBtn" type="submit">Calculate</button>
                                     </div>
                                   </div>

                                   
                                </form>
                                <script>
                                        document.getElementById("calculateBtn").addEventListener("click", function(e) {
                                        e.preventDefault();

                                        // Retrieve input values
                                        const principal = parseFloat(document.getElementById("principal").value);
                                        const annualRate = parseFloat(document.getElementById("annualRate").value);
                                        const duration = parseFloat(document.getElementById("duration").value);

                                        // Validate inputs
                                        if (principal <= 0 || annualRate <= 0 || duration <= 0) {
                                            document.getElementById("result").innerText = "Please enter valid positive numbers.";
                                            return;
                                        }

                                        // Convert annual rate to monthly rate
                                        const monthlyRate = annualRate / 100 / 12;

                                        // Calculate EMI: [P * r * (1 + r)^n] / [(1 + r)^n - 1]
                                        const emi = (principal * monthlyRate * Math.pow(1 + monthlyRate, duration)) / (Math.pow(1 + monthlyRate, duration) - 1);

                                        // Total Payment and Interest
                                        const totalPayment = emi * duration;
                                        const totalInterest = totalPayment - principal;
                                        alert("Interest : "+totalInterest.toFixed(2));
                                        });
                                </script>

                                <!-- <form action="" method="post">
                                    
                                    <div class=" form-group">
                                         <div class="row">
                                             <div class="col-12 col-lg-6">
                                                <div class="mb-3">
                                                    <label for="amount" class="form-label">Loan Amount ($)</label>
                                                    <input type="number" class="form-control" name="amount" required>
                                                </div>
                                                <div class="mb-3">
                                                <label for="" class=" form-label text-secondary d-block">Interest Rates</label>
                                                        <select name="interest_rate" id="Category" class=" form-control form-select custom-select">
                                                            <option selected disabled>Select Rates</option>
                                                            <option value="0.2">20%</option>
                                                            <option value="0.3">30%</option>
                                                            <option value="0.4">40%</option>
                                                            <option value="0.5">50%</option>
                                                        </select>
                                                </div>
                                                  
                                             </div>
                                             
                                    </div>
                                   <div class="row mt-5">
                                     <div class="footerSection">
                                     <button type="submit" class="btn btn-primary">Submit Loan Request</button>
                                     </div>
                                   </div>
                                </form> -->
                               
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
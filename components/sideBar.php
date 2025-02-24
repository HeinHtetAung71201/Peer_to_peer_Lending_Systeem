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
                        <div class="col-12 rounded dash bg-primary text-white active">
                            <div>
                                <i class=" feather-home"></i>
                            <a href="index.html" class="text-white"> Dashboard</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul>
                                <li class="menu-Item-title  text-secondary">
                                    Loan Management
                                </li>
                                <li class="menu-Item-links">
                                   <div>
                                    <i class=" feather-calendar"></i>
                                    <a href="loanRegister.php" class=""> Register to Loan</a>
                                   </div>
                                    <span class=" badge pill bg-info">15</span>
                                </li>
                                <!-- <li class="menu-Item-links">
                                   <div>
                                    <i class=" feather-plus-circle"></i>
                                    <a href="addItems.html" class="">Existing Loan Request</a>
                                   </div>
                                 </li> -->
                                 <li class="menu-Item-links">
                                    <div>
                                        <i class=" feather-list"></i>
                                        <a href="datalist.html" class="">Loan Records</a>
                                    </div>
                                     <span class=" badge pill bg-info">1</span>
                                 </li>
                                <li class="menu-Item-spacer"></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
<div class="row sticky-top ">
                    <div class="col-12 ">
                        <div class="nav-bar bg-primary p-2  rounded d-flex justify-content-between align-items-center">
                            <button class="sidebar-btn btn btn-sm  d-flex align-items-center d-lg-none">
                                <i class=" feather-menu text-light" style="font-size: 2em;"></i>
                            </button>

                            <form action="" class="form-inline d-none d-lg-block">
                                <input type="text" class="form-control-sm " style="padding-top: 7px;">
                                <button class="btn-sm text-primary "  style="padding-top: 7px;">
                                    <i class=" feather-search "></i>
                                </button>
                            </form>
                            <div class="dropdown ">
                                <button class="btn btn-gray dropdown-toggle btn-sm text-white btn-lg" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                 <img src="img/user/user.png" alt="" class="user-profile-img">
                                <?php
                                   
                                    if(isset($_SESSION['username'])){
                                        echo $_SESSION['username'];
                                        // unset($_SESSION['username']);
                                    }
                                ?>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item logout" href="index.php">Log Out</a></li>
                                </ul>
                              </div>
                            
                        </div>
                    </div>
                </div>
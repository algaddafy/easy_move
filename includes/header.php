 <!-- header area start -->
 <header id="sticker">
     <div class="header-top">
         <div class="container">
             <div class="row">
                 <div class="col-md-7">
                     <!-- welcome message start -->
                     <div class="welcome-msg">
                         <ul>
                             <?php
                                $sql = "SELECT * from tblpage where PageType='contactus'";
                                $query = $dbh->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);

                                $cnt = 1;
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $row) {               ?>
                                     <li>
                                         <p> <span> Contact: </span><?php echo htmlentities($row->MobileNumber); ?></p>
                                     </li>
                                     <li>
                                         <p> <span> Email: </span><?php echo htmlentities($row->Email); ?></p>
                                     </li><?php $cnt = $cnt + 1;
                                        }
                                    } ?>
                         </ul>
                     </div>
                     <!-- welcome message end -->
                 </div>
                 <div class="col-md-5">
                     <div class="header-top-menu">
                         <!-- top social start -->
                         <div class="top-social">
                             <ul>
                                 <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                 <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                 <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                 <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                 <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                                 <li><a href="admin/login.php">Admin</a></li>
                                 <li><a href="driver/login.php">Driver</a></li>
                             </ul>
                         </div>
                         <!-- top social end -->

                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- mainmenu area start -->
     <div class="main-menu-area hidden-xs">
         <div class="container">
             <div class="menu-position">
                 <div class="row">
                     <div class="col-md-3 col-sm-2">
                         <!-- logo start -->
                         <div class="logo">
                             <a href="index.php">
                                 <h1>Easy Move</h1>
                             </a>
                         </div>
                         <!-- logo end -->
                     </div>
                     <div class="col-md-9 col-sm-10 static">
                         <!-- main-menu start -->
                         <div class="main-menu">
                             <nav>
                                 <ul>
                                     <!-- single menu -->

                                     <li class="has-sub"><a href="index.php">Home</a></li>
                                     <li><a href="shuttle-timing.php">Shuttle Timing</a></li>
                                     <li><a href="rickshawala-info.php">Rickshawala's Info</a></li>
                                     <li><a href="about-us.php">About us</a></li>
                                     <li><a href="contact.php">Contact Us</a></li>
                                     <li><a href="booking-request.php">Send Request</a></li>

                                     <!-- single menu -->

                                 </ul>
                             </nav>
                         </div>
                         <!-- main-menu start -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- mainmenu area end -->
     <!-- mobile menu area start -->
     <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
         <div class="container">
             <div class="row">
                 <div class="col-xs-12">
                     <div class="logo">
                         <a href="index.php">
                             <h3 style="color: white !important;">Easy Move</h3>
                         </a>
                     </div>
                     <!-- <div class="logo">
                         <a href="index.php">
                             <img src="#" alt="">
                         </a>
                     </div> -->
                     <div class="mobile-menu">
                         <nav>
                             <ul>
                                 <!-- single menu -->

                                 <li class="has-sub"><a href="index.php">Home</a></li>
                                 <li><a href="shuttle-timing.php">Shuttle Timing</a></li>
                                 <li><a href="rickshawala-info.php">Rickshawala's Info</a></li>
                                 <li><a href="about-us.php">About us</a></li>
                                 <li><a href="contact.php">Contact Us</a></li>0
                                 <li><a href="booking-request.php">Send Request</a></li>

                                 <!-- single menu -->
                             </ul>
                             </li>
                             </ul>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- mobile menu area end -->
 </header>
 <!-- header area end -->
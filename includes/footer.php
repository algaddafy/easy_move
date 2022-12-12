 <!-- footer top start -->
 <div class="footer-top-area">
     <div class="container">
         <div class="row">
             <div class="col-md-3 col-sm-4">
                 <!-- single footer start -->
                 <div class="single-footer-top">
                     <div class="footer-about-us">
                         <?php
                            $sql = "SELECT * from tblpage where PageType='contactus'";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);

                            $cnt = 1;
                            if ($query->rowCount() > 0) {
                                foreach ($results as $row) {               ?>
                                 <!-- small logo start -->
                                 <a href="index.php" class="footer-logo"> <strong style="color:white ;font-weight: bold;">EASY MOVE</strong> </a>

                                 <!-- small logo end -->
                                 <!-- address start -->
                                 <div class="footer-address">
                                     <p> <?php echo htmlentities($row->PageDescription); ?></p>
                                 </div>
                                 <!-- address end -->
                                 <!-- contact info start -->
                                 <div class="footer-contact-info">
                                     <p> <span> Phone:</span> +88 <?php echo htmlentities($row->MobileNumber); ?> </p>
                                     <p> <span> Email:</span> <?php echo htmlentities($row->Email); ?> </p>

                                 </div>
                                 <!-- contact info end -->
                     </div><?php $cnt = $cnt + 1;
                                }
                            } ?>
                 </div>
                 <!-- single footer end -->
             </div>
             <div class="col-sm-2">
                 <!-- single footer start -->
                 <div class="single-footer-top">
                     <!-- section title start -->
                     <div class="footer-top-title">
                         <h3>Services</h3>
                     </div>
                     <!-- section title end -->
                     <!-- footer menu start -->
                     <div class="footer-top-menu">
                         <ul>
                             <li class="has-sub"><a href="index.php">Home</a></li>
                             <!-- single menu -->
                             <li><a href="about-us.php">About us</a></li>

                             <!-- single menu -->
                             <li><a href="contact.php">Contact Us</a></li>
                             <li><a href="booking-request.php">Send Request</a></li>
                         </ul>
                     </div>
                     <!-- footer menu end -->
                 </div>
                 <!-- single footer end -->
             </div>
             <div class="col-md-2 col-md-offset-1 col-sm-3">
                 <!-- single footer start -->
                 <div class="single-footer-top">
                     <!-- section title start -->
                     <div class="footer-top-title">
                         <h3>USEFULL LINKS</h3>
                     </div>
                     <!-- section title end -->
                     <!-- footer menu start -->
                     <div class="footer-top-menu">
                         <ul>
                             <li class="has-sub"><a href="index.php">Home</a></li>
                             <!-- single menu -->
                             <li><a href="about-us.php">About us</a></li>

                             <!-- single menu -->
                             <li><a href="contact.php">Contact Us</a></li>
                             <li><a href="booking-request.php">Send Request</a></li>
                         </ul>
                     </div>
                     <!-- footer menu end -->
                 </div>
                 <!-- single footer end -->
             </div>
          
          <!-- --------------------- -->
          
          <div class="col-md-2 col-md-offset-1 col-sm-3">
                 <!-- single footer start -->
                 <div class="single-footer-top">
                     <!-- section title start -->
                     <div class="footer-top-title">
                         <h3>USEFULL LINKS</h3>
                     </div>
                     <!-- section title end -->
                     <!-- footer menu start -->
                     <div class="footer-top-menu">
                         <ul>
                             <li class="has-sub"><a href="index.php">Home</a></li>
                             <!-- single menu -->
                             <li><a href="about-us.php">About us</a></li>

                             <!-- single menu -->
                             <li><a href="contact.php">Contact Us</a></li>
                             <li><a href="booking-request.php">Send Request</a></li>
                         </ul>
                     </div>
                     <!-- footer menu end -->
                 </div>
                 <!-- single footer end -->
             </div>
          
          <!-- --------------------- -->

         </div>
     </div>
 </div>
 <!-- footer top end -->
 <!-- footer area start -->
 <div class="footer-area">
     <div class="container">
         <div class="row">
             <div class="col-md-3 col-sm-4">
                 <!-- footer social start -->
                 <div class="footer-social">
                     <ul>
                         <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                         <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                         <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                         <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                         <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                     </ul>
                 </div>
                 <!-- footer social end -->
             </div>
             <div class="col-md-6 col-sm-4">
                 <!-- copyright text start -->
                 <div class="footer-copyright">
                     <p>Easy Move - 2022 © Md Al Gaddafy</p>
                 </div>
                 <!-- copyright text end -->
             </div>

         </div>
     </div>
 </div>
 <!-- footer area end -->

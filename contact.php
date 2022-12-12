<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Basic page needs
        ============================================ -->

    <title>Easy Move || Contact Us </title>


    <!-- ============== All CSS ================ -->
    <link rel="stylesheet" href="css1/normalize.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/meanmenu.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="css1/icofont.css">
    <link rel="stylesheet" href="css1/change-text.css">
    <link rel="stylesheet" href="css1/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <link rel="stylesheet" href="lib/css/nivo-slider.css">
    <link rel="stylesheet" href="lib/css/preview.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1/responsive.css">

    <!-- modernizr js
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <?php include_once('includes/header.php'); ?>
    <!-- page title area start -->
    <div class="page-title-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- page title start -->
                    <div class="page-title">
                        <h2>contact us</h2>
                    </div>
                    <!-- page title end -->
                    <!-- page title menu start -->
                    <div class="page-title-menu">
                        <ul>
                            <li><a href="index.php">Home</a> <span> / </span> </li>
                            <li><a href="contact.php">contact us</a></li>
                        </ul>
                    </div>
                    <!-- page title menu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    <!-- google map area start -->
    <div class="google-map-area">
        <!-- google map start -->
        <div id="googleMap"></div>
        <!-- google map end -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-4 col-xs-12">
                    <!-- contact box start -->
                    <div class="contact-box spacer">
                        <!-- contact address start -->
                        <div class="contact-info">
                            <?php
                            $sql = "SELECT * from tblpage where PageType='contactus'";
                            $query = $dbh->prepare($sql);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);

                            $cnt = 1;
                            if ($query->rowCount() > 0) {
                                foreach ($results as $row) {               ?>
                                    <!-- title -->
                                    <h3 class="contact-title">contact address</h3>
                                    <!-- single address start -->
                                    <div class="single-address">
                                        <div class="icon"><i class="icofont icofont-location-pin"></i></div>
                                        <div class="icon-text">
                                            <p><?php echo htmlentities($row->PageDescription); ?></p>
                                        </div>
                                    </div>
                                    <!-- single address end -->
                                    <!-- single address start -->
                                    <div class="single-address">
                                        <div class="icon"><i class="icofont icofont-phone"></i></div>
                                        <div class="icon-text">
                                            <p>Phone : +<?php echo htmlentities($row->MobileNumber); ?></p>
                                        </div>
                                    </div>
                                    <!-- single address end -->
                                    <!-- single address start -->
                                    <div class="single-address">
                                        <div class="icon"><i class="icofont icofont-envelope"></i></div>
                                        <div class="icon-text">
                                            <p><?php echo htmlentities($row->Email); ?> </p>
                                        </div>
                                    </div>
                                    <!-- single address end -->
                        </div><?php $cnt = $cnt + 1;
                                }
                            } ?>
                <!-- contact address end -->
                <!-- contact form start -->

                <!-- contact form end -->
                    </div>
                    <!-- contact box end -->
                </div>
            </div>
        </div>
    </div>
    <!-- google map area end -->
    <!-- quick book area start -->

    <div class="quick-book-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="book-now">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <!-- book now content start -->
                                <div class="book-now-title">
                                    <h2>Send Request</h2>
                                    <a href="booking-request.php" class="book-now-btn"> <i class="icofont icofont-long-arrow-right"></i> BOOK NOW</a>
                                </div>
                                <!-- book now content end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- quick book area End -->
    <?php include_once('includes/footer.php'); ?>

    <!-- ============== All JS ================ -->
    <!-- jquery js
        =========================================== -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/change-text.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <script src="js/jquery.textillate.js"></script>
    <script src="lib/js/jquery.nivo.slider.js"></script>
    <script src="lib/home.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/plugins.js"></script>

    <!-- google map
        =========================================== -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
    <script>
        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(23.79952256803416, 90.44464583289255)
            };

            var map = new google.maps.Map(document.getElementById('googleMap'),
                mapOptions);


            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation: google.maps.Animation.BOUNCE,
                icon: 'img/location-indicator.png',
                map: map
            });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <!-- main js
        =========================================== -->
    <script src="js/main.js"></script>
</body>

</html>

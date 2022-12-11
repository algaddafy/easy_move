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

    <title>Easy Move || Rickshawala's Info </title>
    <meta name="description" content="">


    <!-- ============== All CSS ================ -->
    <!-- normalize css
        ============================================ -->
    <link rel="stylesheet" href="css1/normalize.css">

    <!-- animate css
        ============================================ -->
    <link rel="stylesheet" href="css1/animate.css">

    <!-- bootstrap css
        ============================================ -->
    <link rel="stylesheet" href="css1/bootstrap.min.css">

    <!-- meanmenu css
        ============================================ -->
    <link rel="stylesheet" href="css1/meanmenu.min.css">

    <!-- font-awesome css
        ============================================ -->
    <link rel="stylesheet" href="css1/font-awesome.min.css">

    <!-- icofont css
        ============================================ -->
    <link rel="stylesheet" href="css1/icofont.css">

    <!-- change-text css
        ============================================ -->
    <link rel="stylesheet" href="css1/change-text.css">

    <!-- YTPlayer css
        ============================================ -->
    <link rel="stylesheet" href="css1/jquery.mb.YTPlayer.min.css">

    <!-- main css
        ============================================ -->
    <link rel="stylesheet" href="css1/main.css">

    <!-- owl.carousel css
        ============================================ -->
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">

    <!-- nivo-slider css
        ============================================ -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css">
    <link rel="stylesheet" href="lib/css/preview.css">

    <!-- style css
        ============================================ -->
    <link rel="stylesheet" href="style.css">

    <!-- responsive css
        ============================================ -->
    <link rel="stylesheet" href="css1/responsive.css">

    <!-- modernizr js
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <?php include_once('includes/header.php'); ?>
    <!-- page title area start -->
    <div class="page-title-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- page title start -->
                    <div class="page-title">
                        <h2>Rickshawala's Contact Informations</h2>
                    </div>
                    <!-- page title end -->
                    <!-- page title menu start -->
                    <div class="page-title-menu">
                        <ul>
                            <li><a href="index.php">Home</a> <span> / </span> </li>
                            <li><a href="rickshawala-info.php">Rickshawala's info</a></li>
                        </ul>
                    </div>
                    <!-- page title menu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    <!-- about us area start -->
    <div class="about-us-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- section title start -->
                    <div class="section-heading">
                        <h2>Rickshawala's <span> Contact Info</span></h2>
                    </div>
                    <!-- section title end -->
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Kuddus</td>
                                <td>01700000000</td>
                                <td>Notun Bazar</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Rohim</td>
                                <td>01600000000</td>
                                <td>Nodda</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Abbas</td>
                                <td>01900000000</td>
                                <td>Sayed Nogor</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end -->


    <!-- quick book area start -->
    <?php include_once('includes/footer.php'); ?>
    <!-- ============== All JS ================ -->
    <!-- jquery js
        =========================================== -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>

    <!-- bootstrap js
        =========================================== -->
    <script src="js/bootstrap.min.js"></script>

    <!-- meanmenu js
        =========================================== -->
    <script src="js/jquery.meanmenu.js"></script>

    <!-- scrollUp js
        =========================================== -->
    <script src="js/jquery.scrollUp.min.js"></script>

    <!-- wow js
        =========================================== -->
    <script src="js/wow.min.js"></script>

    <!-- owl.carousel js
        =========================================== -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- change-text js
        =========================================== -->
    <script src="js/change-text.js"></script>

    <!-- YTPlayer js
        =========================================== -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>

    <!-- textillate js
        =========================================== -->
    <script src="js/jquery.lettering.js"></script>
    <script src="js/jquery.textillate.js"></script>

    <!-- nivo.slider js
        =========================================== -->
    <script src="lib/js/jquery.nivo.slider.js"></script>
    <script src="lib/home.js"></script>

    <!-- plugins js
        =========================================== -->
    <script src="js/plugins.js"></script>

    <!-- main js
        =========================================== -->
    <script src="js/main.js"></script>
</body>

</html>
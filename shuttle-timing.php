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

    <title>Easy Move || Shuttle Timing </title>
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
                        <h2>Shuttle Timing</h2>
                    </div>
                    <!-- page title end -->
                    <!-- page title menu start -->
                    <div class="page-title-menu">
                        <ul>
                            <li><a href="index.php">Home</a> <span> / </span> </li>
                            <li><a href="shuttle-timing.php">Shuttle Timing</a></li>
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
                        <h2>Shuttle <span> Timing</span></h2>
                    </div>
                    <!-- section title end -->
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Start Time</th>
                                <th>Arival Time</th>
                                <th>Route</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $sql = "SELECT * from  shuttle";
                                $query = $dbh->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);

                                $cnt = 1;
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $row) {               ?>
                                        <td><?php echo htmlentities($cnt); ?></td>
                                        <td><?php echo htmlentities($row->S_Time); ?></td>
                                        <td><?php echo htmlentities($row->A_Time); ?></td>
                                        <td><?php echo htmlentities($row->Route); ?></td>
                            </tr>
                    <?php $cnt = $cnt + 1;
                                    }
                                } ?>
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
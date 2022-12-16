<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pickuploc = $_POST['pickuploc'];
    $destination = $_POST['destination'];
    $phone = $_POST['phone'];
    $pickupdate = $_POST['pickupdate'];
    $pickuptime = $_POST['pickuptime'];
    $bookingnumber = mt_rand(100000000, 999999999);
    $sql = "insert into tblbook(BookingNumber,Name,Email,PhoneNumber,PickupLoc,Destination,PickupDate,PickupTime)values(:bookingnumber,:name,:email,:phone,:pickuploc,:destination,:pickupdate,:pickuptime)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':pickuptime', $pickuptime, PDO::PARAM_STR);
    $query->bindParam(':pickupdate', $pickupdate, PDO::PARAM_STR);
    $query->bindParam(':destination', $destination, PDO::PARAM_STR);
    $query->bindParam(':pickuploc', $pickuploc, PDO::PARAM_STR);
    $query->bindParam(':phone', $phone, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':bookingnumber', $bookingnumber, PDO::PARAM_STR);
    $query->execute();
    $_SESSION['bookingnumber'] = $result['bookingnumber'];
    $LastInsertId = $dbh->lastInsertId();
    if ($LastInsertId > 0) {
        echo '<script>alert("Your Easy Move assistance has been book successfully. Booking Number is "+"' . $bookingnumber . '")</script>';

        echo "<script>window.location.href ='booking-request.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Basic page needs
        ============================================ -->

    <title>Easy Move || Request Form </title>


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
                        <h2>Send Request</h2>
                    </div>
                    <!-- page title end -->
                    <!-- page title menu start -->
                    <div class="page-title-menu">
                        <ul>
                            <li><a href="index.php">Home</a> <span> / </span> </li>
                            <li><a href="booking-request.php">Request Form</a></li>
                        </ul>
                    </div>
                    <!-- page title menu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- page title area end -->
    <!-- checkout area start -->
    <div class="checkout-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- client address start -->
                    <div class="client-address">
                        <!-- section title start -->
                        <div class="section-small-title">
                            <h3>Ride Booking Form for UIU Students</h3>
                        </div>
                        <!-- section title start -->
                        <!-- client address form -->
                        <div class="client-address-form">
                            <form action="" method="post">
                                <label class="form-label">Name</label>
                                <input class="form-control" type="text" placeholder="Enter your name" name="name" required="true">
                                <label class="form-label">Email</label>
                                <input class="form-control" type="email" placeholder="Enter your email" name="email" required="true">
                                <label class="form-label">Phone</label>
                                <input class="form-control" type="tel" placeholder="Enter your phone number" name="phone" required="true" maxlength="11" pattern="[0-9]+">
                                <!-- <label class="form-label" for="select_box">Choose your driver with timing:</label>

                                <select class="form-control" name="select_box" id="select_box" style="width: 50%;">
                                    <option selected disabled>Select your driver with timing</option>
                                    <?php
                                    $sql = "SELECT * from tbldriver";
                                    $query = $dbh->prepare($sql);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                                    $cnt = 1;
                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $row) { ?>
                                            <option value=" Day: <?php echo htmlentities($row->Select_Day) . " Time: " . htmlentities($row->Select_Time); ?>">
                                                Day: <?php echo htmlentities($row->Select_Day) . " Time: " . htmlentities($row->Select_Time); ?></option>

                                    <?php }
                                    } ?>
                                </select>
                                <br> -->
                                <label class="form-label">Pickup Location</label>
                                <input class="form-control" type="text" placeholder="Enter Location" name="pickuploc" required="true">
                                <label class="form-label">Destination</label>
                                <input class="form-control" type="text" placeholder="Enter Destination" name="destination" required="true">
                                <label class="form-label">Pickup Date</label>
                                <input class="form-control" type="date" required="true" name="pickupdate">
                                <label class="form-label">Pickup Time</label>
                                <input class="form-control" type="time" required="true" name="pickuptime">
                                <div class="form-btn">
                                    <div class="shopping-button">
                                        <div class="form-btn">
                                            <button class="submit-btn" name="submit">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- client address end -->
                </div>

            </div>
        </div>
    </div>
    <!-- checkout area end -->

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


    <?php include_once('includes/footer.php'); ?>

    <!-- ============== All JS ================ -->
    <!-- jquery js
        =========================================== -->
    <script type="text/javascript" src="js/vendor/jquery-1.12.0.min.js"></script>

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

    <!-- Deslect -->

    <!-- <script src="js/dselect.js"></script>

    <script>
        var select_box_element = document.querySelector('#select_box');

        dselect(select_box_element, {
            search: true
        });
    </script> -->
</body>

</html>
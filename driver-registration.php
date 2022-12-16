<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);
if (isset($_POST['submit'])) {


    $driid = $_POST['driid'];
    $name = $_POST['name'];
    $uiuid = $_POST['uiuid'];
    $mobnum = $_POST['mobnum'];
    $email = $_POST['email'];
    $select_day = $_POST['select_day'];
    $select_time = $_POST['select_time'];
    $address = $_POST['address'];

    $password = md5($_POST['password']);
    $ret = "select Email from tbldriver where Email=:email || Uiuid=:uiuid || MobileNumber=:mobnum || DriverID=:driid";
    $query = $dbh->prepare($ret);
    $query->bindParam(':driid', $driid, PDO::PARAM_STR);
    $query->bindParam(':uiuid', $driid, PDO::PARAM_STR);
    $query->bindParam(':mobnum', $mobnum, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() == 0) {

        $sql = "insert into tbldriver(DriverID,Name,Uiuid,MobileNumber,Email,Select_Day,Select_Time,Address,Password)values(:driid,:name,:uiuid,:mobnum,:email,:select_day,:select_time,:address,:password)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':driid', $driid, PDO::PARAM_STR);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':uiuid', $uiuid, PDO::PARAM_STR);
        $query->bindParam(':mobnum', $mobnum, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':select_day', $select_day, PDO::PARAM_STR);
        $query->bindParam(':select_time', $select_time, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();

        $LastInsertId = $dbh->lastInsertId();
        if ($LastInsertId > 0) {
            echo '<script>alert("Driver detail has been added.")</script>';
            echo "<script>window.location.href ='driver-registration.php'</script>";
        } else {
            echo '<script>alert("Something Went Wrong. Please try again")</script>';
        }
    } else {

        echo "<script>alert('Email-id, Username or Mobile Number already exist. Please try again');</script>";
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
                        <h2>Driver Registration</h2>
                    </div>
                    <!-- page title end -->
                    <!-- page title menu start -->
                    <div class="page-title-menu">
                        <ul>
                            <li><a href="index.php">Home</a> <span> / </span> </li>
                            <li><a href="booking-request.php">Driver Registration Form</a></li>
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
                            <h3>Rider Registration Form for UIU Students</h3>
                        </div>
                        <!-- section title start -->
                        <!-- client address form -->
                        <div class="client-address-form">
                            <form method="post">

                                <div class="form-group">
                                    <label>Driver Username</label>
                                    <input type="text" class="form-control" id="exampleTextInput1" name="driid" value="" required='true' maxlength="20" placeholder="Enter your username.">
                                </div>
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" id="exampleTextInput1" name="name" value="" required='true' placeholder="Enter your full name.">
                                </div>
                                <div class="form-group">
                                    <label>University ID</label>
                                    <input type="text" class="form-control" id="exampleTextInput1" name="uiuid" value="" required='true' maxlength="10" placeholder="011191212">
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control" id="email2" name="mobnum" value="" required="true" maxlength="11" pattern="[0-9]+" placeholder="Enter your mobile number.">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="" required='true' placeholder="Enter your email number.">
                                </div>
                                <label class="form-label" for="select_day">Choose your day:</label>

                                <select class="form-control" name="select_day" id="select_day" style="width: 50%;">
                                    <option selected disabled>Select your day</option>
                                    <option value="Sat">Sat</option>
                                    <option value="Sat & Tue">Sat & Tue</option>
                                    <option value="Sun">Sun</option>
                                    <option value="Sun & Wed">Sun & Wed</option>
                                    <option value="Mon">Mon</option>
                                    <option value="Tue">Tue</option>
                                    <option value="Wed">Wed</option>
                                </select>
                                <br>
                                <label class="form-label" for="select_time">Choose your pickup time:</label>

                                <select class="form-control" name="select_time" id="select_time" style="width: 50%;">
                                    <option selected disabled>Select your time</option>
                                    <option value="10:15am">10:15am</option>
                                    <option value="11:15am">11:15am</option>
                                    <option value="12:00pm">12:00pm</option>
                                    <option value="01:30pm">01:30pm</option>
                                    <option value="01:45pm">01:45pm</option>
                                    <option value="03:15pm">03:15pm</option>
                                    <option value="03:45pm">03:45pm</option>
                                    <option value="04:45pm">04:45pm</option>
                                </select>
                                <br>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" id="email2" name="address" value="" required='true' maxlength="20" placeholder="Enter your address."></input>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="email2" name="password" value="" required='true'>
                                </div>


                                <br>
                                <button type="submit" class="btn btn-primary" name="submit">Registration</button>
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
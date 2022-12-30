<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['vamsaid'] == 0)) {
    header('location:logout.php');
} else {
    if (isset($_POST['submit'])) {




        $vamsaid = $_SESSION['vamsaid'];
        $S_Time = $_POST['S_Time'];
        $A_Time = $_POST['A_Time'];
        $Route = $_POST['Route'];

        $sql = "INSERT INTO shuttle (S_Time, A_Time, Route) VALUES (:S_Time,:A_Time,:Route)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':S_Time', $S_Time, PDO::PARAM_STR);
        $query->bindParam(':A_Time', $A_Time, PDO::PARAM_STR);
        $query->bindParam(':Route', $Route, PDO::PARAM_STR);

        $query->execute();
        echo '<script>alert("Shuttle time has been Added.")</script>';
    }

?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Easy Move: Add Shuttle Timing</title>

        <link rel="stylesheet" href="../assets/vendor/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="../assets/vendor/fontawesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
        <link rel="stylesheet" href="../assets/vendor/parsleyjs/css/parsley.css">

        <link rel="stylesheet" href="../assets/css/main.css" type="text/css">
        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    </head>

    <body class="theme-indigo">
        <?php include_once('includes/header.php'); ?>

        <div class="main_content" id="main-content">
            <?php include_once('includes/sidebar.php'); ?>



            <div class="page">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="javascript:void(0);">Add Shuttle Timing</a>

                </nav>
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Add Shuttle Timing</h2>
                                </div>
                                <div class="body">
                                    <form id="" method="post" novalidate>
                                        <div class="form-group">
                                            <label>Start Time:</label>
                                            <input type="text" name="S_Time" value="" class="form-control" required='true'>
                                        </div>
                                        <div class="form-group">
                                            <label>Arival Time:</label>
                                            <input type="text" name="A_Time" value="" class="form-control" required='true'>
                                        </div>
                                        <div class="form-group">
                                            <label>Route:</label>
                                            <input type="text" name="Route" value="" class="form-control" required='true'>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary" name="submit">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Core -->
        <script src="../assets/bundles/libscripts.bundle.js"></script>
        <script src="../assets/bundles/vendorscripts.bundle.js"></script>

        <script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
        <script src="../assets/vendor/parsleyjs/js/parsley.min.js"></script>

        <!-- Theme JS -->
        <script src="../assets/js/theme.js"></script>
        <script>
            $(function() {
                // validation needs name of the element
                $('#food').multiselect();

                // initialize after multiselect
                $('#basic-form').parsley();
            });
        </script>
    </body>

    </html><?php }  ?>
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['vamsaid'] == 0)) {
    header('location:logout.php');
} else {



?>
    <!doctype html>
    <html lang="en">

    <head>

        <title>Easy Move: All Rickshawala's Info</title>

        <link rel="stylesheet" href="../assets/vendor/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="../assets/vendor/fontawesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">

        <link rel="stylesheet" href="../assets/css/main.css">
    </head>

    <body class="theme-indigo">
        <!-- Page Loader -->

        <?php include_once('includes/header.php'); ?>

        <div class="main_content" id="main-content">
            <?php include_once('includes/sidebar.php'); ?>



            <div class="page">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="javascript:void(0);">All Rickshawala's Info</a>
                </nav>
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="header">
                                    <h2><strong>All Rickshawala's</strong> Info </h2>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Name</th>
                                                    <th>Mobile Number</th>
                                                    <th>Address</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php
                                                    $sql = "SELECT * from  rickshawala";
                                                    $query = $dbh->prepare($sql);
                                                    $query->execute();
                                                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                                                    $cnt = 1;
                                                    if ($query->rowCount() > 0) {
                                                        foreach ($results as $row) {               ?>
                                                            <td><?php echo htmlentities($cnt); ?></td>
                                                            <td><?php echo htmlentities($row->Name); ?></td>
                                                            <td><?php echo htmlentities($row->Contact); ?></td>
                                                            <td><?php echo htmlentities($row->address); ?></td>
                                                            <td><a href="edit_rickshawala.php?editid=<?php echo htmlentities($row->ID); ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
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
                    </div>

                </div>
            </div>
        </div>


        <!-- Jquery Core Js -->
        <script src="../assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
        <script src="../assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

        <!-- Jquery DataTable Plugin Js -->
        <script src="../assets/bundles/datatablescripts.bundle.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/buttons.flash.min.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
        <script src="../assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

        <script src="../assets/js/theme.js"></script><!-- Custom Js -->
        <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
    </body>

    </html><?php }  ?>
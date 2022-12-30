<?php
session_start();
error_reporting(1);
include('includes/dbconnection.php');
if (strlen($_SESSION['vamsaid'] == 0)) {
    header('location:logout.php');
} else {
    if (isset($_POST['submit'])) {

        $vamsaid = $_SESSION['vamsaid'];
        $Name = $_POST['Name'];
        $Contact = $_POST['Contact'];
        $address = $_POST['address'];
        $eid = $_GET['editid'];

        $sql = "update rickshawala set Name=:Name,Contact=:Contact,address=:address where ID=:eid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':Name', $Name, PDO::PARAM_STR);
        $query->bindParam(':Contact', $Contact, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);
        $query->bindParam(':eid', $eid, PDO::PARAM_STR);
        $query->execute();

        echo '<script>alert("Rickshawals info has been Updated.")</script>';
    }

?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Easy Move: Update Rickshawala's info</title>

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
                    <a class="navbar-brand" href="javascript:void(0);">Update Rickshawala's info</a>

                </nav>
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Update Rickshawala's info</h2>
                                </div>
                                <div class="body">
                                    <form id="" method="post" novalidate>
                                        <?php
                                        $eid = $_GET['editid'];
                                        $sql = "SELECT * from  rickshawala where ID=$eid";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $row) {               ?>
                                                <div class="form-group">
                                                    <label>Name:</label>
                                                    <input type="text" name="Name" value="<?php echo $row->Name; ?>" class="form-control" required='true'>
                                                </div>
                                                <div class="form-group">
                                                    <label>Contact:</label>
                                                    <input type="text" name="Contact" value="<?php echo $row->Contact; ?>" class="form-control" required='true'>
                                                </div>
                                                <div class="form-group">
                                                    <label>Address:</label>
                                                    <input type="text" name="address" value="<?php echo $row->address; ?>" class="form-control" required='true'>
                                                </div>
                                        <?php
                                            }
                                        } ?>
                                        <br>
                                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
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
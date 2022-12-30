<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['vamsaid'] == 0)) {
    header('location:logout.php');
} else {
    if (isset($_POST['submit'])) {




        $vamsaid = $_SESSION['vamsaid'];
        $pagetitle = $_POST['pagetitle'];
        $pagedes = $_POST['pagedes'];
        $mobnum = $_POST['mobnum'];
        $email = $_POST['email'];
        $sql = "update tblpage set PageTitle=:pagetitle,PageDescription=:pagedes,Email=:email,MobileNumber=:mobnum where  PageType='contactus'";
        $query = $dbh->prepare($sql);
        $query->bindParam(':pagetitle', $pagetitle, PDO::PARAM_STR);
        $query->bindParam(':pagedes', $pagedes, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':mobnum', $mobnum, PDO::PARAM_STR);
        $query->execute();
        echo '<script>alert("Contact us has been updated")</script>';
    }

?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Easy Move: Contact Us</title>

        <link rel="stylesheet" href="../assets/vendor/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="../assets/vendor/fontawesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
        <link rel="stylesheet" href="../assets/vendor/parsleyjs/css/parsley.css">

        <link rel="stylesheet" href="../assets/css/main.css" type="text/css">
        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(nicEditors.allTextAreas);
        </script>
    </head>

    <body class="theme-indigo">
        <?php include_once('includes/header.php'); ?>

        <div class="main_content" id="main-content">
            <?php include_once('includes/sidebar.php'); ?>



            <div class="page">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="javascript:void(0);">Update Contact Us</a>

                </nav>
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Update Contact Us</h2>
                                </div>
                                <div class="body">
                                    <form id="" method="post" novalidate>
                                        <?php

                                        $sql = "SELECT * from  tblpage where PageType='contactus'";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        $cnt = 1;
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $row) {               ?>
                                                <div class="form-group">
                                                    <label>Page Title:</label>
                                                    <input type="text" name="pagetitle" value="<?php echo $row->PageTitle; ?>" class="form-control" required='true'>
                                                </div>
                                                <div class="form-group">
                                                    <label>Page Description:</label>
                                                    <input type="text" name="pagedes" value="<?php echo $row->PageDescription; ?>" class="form-control" required='true'>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email:</label>
                                                    <input type="text" name="email" id="email" required="true" value="<?php echo $row->Email; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mobile Number:</label>
                                                    <input type="text" name="mobnum" id="mobnum" required="true" value="<?php echo $row->MobileNumber; ?>" class="form-control" maxlength="10" pattern="[0-9]+">
                                                </div>
                                        <?php $cnt = $cnt + 1;
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
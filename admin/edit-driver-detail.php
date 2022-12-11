<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['vamsaid'] == 0)) {
    header('location:logout.php');
} else {
    if (isset($_POST['submit'])) {


        $name = $_POST['name'];
        $mobnum = $_POST['mobnum'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $eid = $_GET['editid'];



        $sql = "update tbldriver set Name=:name,MobileNumber=:mobnum,Email=:email,Address=:address where ID=:eid";
        $query = $dbh->prepare($sql);

        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':mobnum', $mobnum, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);
        $query->bindParam(':eid', $eid, PDO::PARAM_STR);
        $query->execute();

        echo '<script>alert("Driver detail has been updated")</script>';
    }

?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Easy Move: Update Driver</title>

        <link rel="stylesheet" href="../assets/vendor/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="../assets/vendor/fontawesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
        <link rel="stylesheet" href="../assets/vendor/parsleyjs/css/parsley.css">

        <link rel="stylesheet" href="../assets/css/main.css" type="text/css">
    </head>

    <body class="theme-indigo">
        <?php include_once('includes/header.php'); ?>

        <div class="main_content" id="main-content">
            <?php include_once('includes/sidebar.php'); ?>



            <div class="page">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="javascript:void(0);">Update Driver</a>

                </nav>
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Update Driver</h2>
                                </div>
                                <div class="body">
                                    <form id="" method="post" novalidate>
                                        <?php
                                        $eid = $_GET['editid'];
                                        $sql = "SELECT * from  tbldriver where ID=$eid";
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $results = $query->fetchAll(PDO::FETCH_OBJ);
                                        $cnt = 1;
                                        if ($query->rowCount() > 0) {
                                            foreach ($results as $row) {               ?>
                                                <div class="form-group">
                                                    <label>Driver ID</label>
                                                    <input type="text" class="form-control" name="driid" value="<?php echo htmlentities($row->DriverID); ?>" readonly='true' maxlength="10">
                                                </div>
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" name="name" value="<?php echo htmlentities($row->Name); ?>" required='true'>
                                                </div>
                                                <div class="form-group">
                                                    <label>Mobile Number</label>
                                                    <input type="text" class="form-control" name="mobnum" value="<?php echo htmlentities($row->MobileNumber); ?>" required="true" maxlength="10" pattern="[0-9]+">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" id="email2" name="email" value="<?php echo htmlentities($row->Email); ?>" required='true'>
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea type="text" class="form-control" name="address" value="" required='true'><?php echo htmlentities($row->Address); ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Joining Date</label>
                                                    <input type="text" class="form-control" name="" value="<?php echo htmlentities($row->JoiningDate); ?>" readonly='true'>
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
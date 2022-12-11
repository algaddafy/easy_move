<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['vamsid'] == 0)) {
  header('location:logout.php');
} else {
  if (isset($_POST['submit'])) {

    $eid = $_GET['editid'];
    $bookid = $_GET['bookid'];
    $status = $_POST['status'];
    $remark = $_POST['remark'];
    $assignee = $_POST['assignee'];

    $sql = "insert into tbltracking(BookingNumber,Remark,Status) value(:bookid,:remark,:status)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':bookid', $bookid, PDO::PARAM_STR);
    $query->bindParam(':remark', $remark, PDO::PARAM_STR);
    $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->execute();
    $sql = "update tblbook set Status=:status,Remark=:remark where ID=:eid";

    $query = $dbh->prepare($sql);

    $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->bindParam(':remark', $remark, PDO::PARAM_STR);
    $query->bindParam(':eid', $eid, PDO::PARAM_STR);
    $query->execute();
    echo '<script>alert("Remark has been updated")</script>';
    echo "<script>window.location.href ='total-request.php'</script>";
  }


?>
  <!doctype html>
  <html lang="en">

  <head>

    <title>Easy Move: View Request</title>

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
          <a class="navbar-brand" href="javascript:void(0);">View Booking Request</a>
        </nav>
        <div class="container-fluid">
          <div class="row clearfix">
            <div class="col-lg-12">
              <div class="card">
                <div class="header">
                  <h2><strong>View Booking</strong> Request </h2>
                </div>
                <div class="body">
                  <div class="table-responsive">
                    <?php
                    $eid = $_GET['editid'];
                    $sql = "SELECT * from tblbook  where ID=:eid";
                    $query = $dbh->prepare($sql);
                    $query->bindParam(':eid', $eid, PDO::PARAM_STR);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                      foreach ($results as $row) {               ?>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                          <tr>
                            <th style="color: orange;">Booking Number</th>
                            <td colspan="4" style="color: orange;font-weight: bold;"><?php echo $bookingno = ($row->BookingNumber); ?></td>

                          </tr>
                          <tr>
                            <th>Email</th>
                            <td><?php echo $row->Email; ?></td>
                            <th>Name</th>
                            <td><?php echo $row->Name; ?></td>

                          </tr>
                          <tr>
                            <th>Destination</th>
                            <td><?php echo $row->Destination; ?></td>
                            <th>Pickup Location</th>
                            <td><?php echo $row->PickupLoc; ?></td>

                          </tr>
                          <tr>
                            <th>Pickup Time</th>
                            <td><?php echo $row->PickupTime; ?></td>
                            <th>Pickup Date</th>
                            <td><?php echo $row->PickupDate; ?></td>

                          </tr>
                          <tr>
                            <th>Assign To</th>
                            <?php if ($row->AssignTo == "") { ?>

                              <td><?php echo "Not Updated Yet"; ?></td>
                            <?php } else { ?> <td><?php echo htmlentities($row->AssignTo); ?>
                              </td>
                            <?php } ?>
                            <th>Date of Request</th>
                            <td><?php echo $row->DateofRequest; ?></td>

                          </tr>
                          <tr>
                            <th>Order Final Status</th>
                            <td> <?php $status = $row->Status;

                                  if ($row->Status == "On The Way") {
                                    echo "Driver is on the way";
                                  }

                                  if ($row->Status == "Completed") {
                                    echo "Your request has been completed";
                                  }; ?></td>
                            <th>Driver Remark</th>
                            <?php if ($row->Status == "") { ?>

                              <td colspan="4"><?php echo "Not Updated Yet"; ?></td>
                            <?php } else { ?> <td><?php echo htmlentities($row->Status); ?>
                              </td>
                            <?php } ?>

                          </tr>

                      <?php $cnt = $cnt + 1;
                      }
                    } ?>

                        </table>
                        <?php
                        $bookid = $_GET['bookid'];
                        if ($status != "") {
                          $ret = "select tbltracking.Remark,tbltracking.Status,tbltracking.UpdationDate from tbltracking where tbltracking.BookingNumber =:bookid";
                          $query = $dbh->prepare($ret);
                          $query->bindParam(':bookid', $bookid, PDO::PARAM_STR);
                          $query->execute();
                          $results = $query->fetchAll(PDO::FETCH_OBJ);
                          $cnt = 1;
                        ?>
                          <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <tr align="center">
                              <th colspan="4" style="color: blue">Tracking History</th>
                            </tr>
                            <tr>
                              <th>#</th>
                              <th>Remark</th>
                              <th>Status</th>
                              <th>Time</th>
                            </tr>
                            <?php
                            foreach ($results as $row) {               ?>
                              <tr>
                                <td><?php echo $cnt; ?></td>
                                <td><?php echo $row->Remark; ?></td>
                                <td><?php echo $row->Status;
                                    ?></td>
                                <td><?php echo $row->UpdationDate; ?></td>
                              </tr>
                            <?php $cnt = $cnt + 1;
                            } ?>
                          </table>
                        <?php  }
                        ?>

                        <?php

                        if ($status == "Approved" || $status == "On The Way") {
                        ?>
                          <p align="center" style="padding-top: 20px">
                            <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal">Take Action</button>
                          </p>

                        <?php } ?>
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <table class="table table-bordered table-hover data-tables">

                                  <form method="post" name="submit">



                                    <tr>
                                      <th>Remark :</th>
                                      <td>
                                        <textarea name="remark" placeholder="Remark" rows="12" cols="14" class="form-control wd-450" required="true"></textarea>
                                      </td>
                                    </tr>


                                    <tr>
                                      <th>Status :</th>
                                      <td>

                                        <select name="status" class="form-control wd-450" required="true">
                                          <option value="On The Way" selected="true">On the way</option>
                                          <option value="Completed">Task Completed</option>
                                        </select>
                                      </td>
                                    </tr>
                                </table>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>

                                </form>


                              </div>


                            </div>
                          </div>

                        </div>

                  </div>
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
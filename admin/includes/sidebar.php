<div class="left_sidebar">
    <nav class="sidebar">
        <div class="user-info">
            <div class="image"><a href="javascript:void(0);"><img src="../assets/images/user.png" alt="User"></a></div>
            <div class="detail mt-3">
                <?php
                $aid = $_SESSION['vamsaid'];
                $sql = "SELECT AdminName,Email from  tbladmin where ID=:aid";
                $query = $dbh->prepare($sql);
                $query->bindParam(':aid', $aid, PDO::PARAM_STR);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt = 1;
                if ($query->rowCount() > 0) {
                    foreach ($results as $row) {               ?>
                        <h5 class="mb-0"><?php echo $row->AdminName; ?></h5>
                        <small><?php echo $row->Email; ?></small><?php $cnt = $cnt + 1;
                                                                }
                                                            } ?>
            </div>
        </div>
        <ul id="main-menu" class="metismenu">

            <li class="active"><a href="dashboard.php"><i class="ti-home"></i><span>Dashboard</span></a></li>
            <li>
                <a href="" class="has-arrow"><i class="ti-user"></i><span>Driver</span></a>
                <ul>
                    <li><a href="add-driver.php">Add Driver</a></li>
                    <li><a href="manage-driver.php">Manage Driver</a></li>

                </ul>
            </li>
            <li>
                <a href="" class="has-arrow"><i class="ti-pencil-alt"></i><span>Page</span></a>
                <ul>
                    <li><a href="rickshawala-info.php">Add Rickshawala's Info</a></li>
                    <li><a href="all_rickshawala.php">All Rickshawala's Info</a></li>
                    <li><a href="shuttle-timing.php">Add Shuttle-timing</a></li>
                    <li><a href="all_shuttle.php">All Shuttle-timing</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>

                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="has-arrow"><i class="ti-pencil-alt"></i><span>Request</span></a>
                <ul>
                    <li><a href="all-request.php">All Request</a></li>
                    <li><a href="new-request.php">New Request</a></li>
                    <li><a href="approved-request.php">Approved Request</a></li>
                    <li><a href="cancel-request.php">Cancel Request</a></li>

                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class="has-arrow"><i class="ti-view-list"></i><span>Driver Response</span></a>
                <ul>
                    <li><a href="ontheway.php">On The Way</a></li>
                    <li><a href="completed.php">Task Completed</a></li>

                </ul>
            </li>
            <li><a href="search.php"><i class="ti-search"></i><span>Search</span></a></li>

            <li class="open-top">
                <a href="javascript:void(0)" class="has-arrow"><i class="ti-lock"></i><span>Report</span></a>
                <ul>
                    <li><a class="dropdown-item" href="between-dates-reports.php">B/w Dates</a></li>
                    <li><a class="dropdown-item" href="driverwise-report.php">Driverwise report</a></li>

                </ul>
            </li>

        </ul>
    </nav>
</div>
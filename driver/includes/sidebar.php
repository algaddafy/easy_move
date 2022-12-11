<div class="left_sidebar">
        <nav class="sidebar">
            <div class="user-info">
                <div class="image"><a href="javascript:void(0);"><img src="../assets/images/user.png" alt="User"></a></div>
                <div class="detail mt-3">
                    <?php
                     $did=$_SESSION['vamsdid'];
                    $sql="SELECT Name,Email from  tbldriver where DriverID=:did";
$query = $dbh -> prepare($sql);
$query->bindParam(':did',$did,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

foreach($results as $row)
{    
$email=$row->Email;   
$fname=$row->Name;     
}   ?>
                    <h5 class="mb-0"><?php  echo $fname ;?></h5>
                    <small><?php  echo $email ;?></small>
                </div>
            </div>
            <ul id="main-menu" class="metismenu">
            
                <li class="active"><a href="dashboard.php"><i class="ti-home"></i><span>Dashboard</span></a></li>
               
               
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-pencil-alt"></i><span>Assign Request</span></a>
                    <ul>
                        <li><a href="new-request.php">New Request</a></li>
                        <li><a href="ontheway.php">On the way Request</a></li>
                        <li><a href="completed.php">Completed Request</a></li>
                        <li><a href="total-request.php">Total Request</a></li>
                       
                    </ul>
                </li>
                
                 <li><a href="search.php"><i class="ti-search"></i><span>Search</span></a></li>
                
                <li class="open-top">
                    <a href="javascript:void(0)" class="has-arrow"><i class="ti-lock"></i><span>Report</span></a>
                    <ul>
                        <li><a class="dropdown-item" href="between-dates-reports.php">B/w Dates</a></li>
                       
                    </ul>
                </li>
            </ul>            
        </nav>
    </div>
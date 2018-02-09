<?php
$pageTitle = "Register new patrons";
include_once 'header1.php';
$side_navigation_active = 'register_new_patrons';
include 'connect.php';
?>

<?php
$surname = "";
$firstname = "";
$lastname = "";
$email = "";
$password = "";
$faculty = "";
$department = "";
$reg_num = "";
$program_type = "";
$result = "";

$name = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$type = $_FILES['file']['type'];
$path = "upload/{$name}";

//upload file



if (isset($_POST['register'])) {
    $surname = $_POST['sname'];
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    if ($_POST['pword2'] === ($_POST['pword1'])) {
        $password = $_POST['pword2'];
    } else {
        echo 'incorrect password';
    }
    $faculty = $_POST['faculty'];
    $department = $_POST['dept'];
    $reg_num = $_POST['reg_num'];
    $program_type = $_POST['prog_type'];
    
    move_uploaded_file($tmp_name, $path);





    require 'connect.php';
    $sql = "INSERT INTO `users`(`sname`, `fname`, `lname`, `email`, `pword`, `faculty`, `dept`, `reg_num`, `prog_type`, `image`) VALUES ('$surname','$firstname','$lastname','$email','$password','$faculty','$department','$reg_num','$program_type','$path') ";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
}
?>

<html lang="en">


    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        <!-- BEGIN HEADER -->
        <?php include_once 'u_header.php'; ?>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php require_once 'side_nav_cir.php'; ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">

                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="admin_dashboard.php">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Dashboard</span>
                        </li>
                    </ul>

                    <div class="col-md-12">
                        <div class="portlet box yellow">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-bar-chart-o"></i> Register  </div>

                            </div>
                            <div class="portlet-body form">


                                <form action="register.php" method="POST" class="form-horizontal" enctype='multipart/form-data'>
                                    <div class="form-body">
                                        <?php
                                        if ($result == "") {
                                            
                                        } elseif ($result == TRUE) {
                                            echo '<div class="alert alert-success"> Successfully registered </div>';
                                        } elseif ($result == FALSE) {
                                            echo '<div class="alert alert-danger"> Could not complete registration </div>';
                                        }
                                        ?>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Surname</label>
                                            <div class="col-md-6">
                                                <input type="text" id="sname"  name="sname" required="required" value="<?php echo $surname; ?>" class="form-control input-circle" placeholder="Surname">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">First Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="fname" name="fname" required="required" value="<?php echo $firstname; ?>" class="form-control input-circle" placeholder="First Name">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Last Name</label>
                                            <div class="col-md-6">
                                                <input type="text" id="lname" name="lname" required="required" value="<?php echo $lastname; ?>" class="form-control input-circle" placeholder="Last Name">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Email</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon input-circle-left">
                                                        <i class="fa fa-envelope"></i>
                                                    </span>
                                                    <input type="email" id="email" name="email" required="required" value="<?php echo $email; ?>" class="form-control input-circle-right" placeholder="Email Address"> </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Password</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="password" id="pword1" name="pword1" required="required" value="<?php echo $password; ?>" class="form-control input-circle-left" placeholder="Password">
                                                    <span class="input-group-addon input-circle-right">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Confirm Password</label>
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <input type="password" id="pword2" name="pword2" required="required" value="<?php echo $password; ?>" class="form-control input-circle-left" placeholder="Confirm Password">
                                                    <span class="input-group-addon input-circle-right">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Faculty</label>
                                            <div class="col-md-6">
                                                <input type="text" id="faculty" name="faculty" required="required" value="<?php echo $faculty; ?>" class="form-control input-circle" placeholder="Faculty">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Department</label>
                                            <div class="col-md-6">
                                                <input type="text" id="dept" name="dept" required="required" value="<?php echo $department; ?>" class="form-control input-circle" placeholder="Department">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Reg number</label>
                                            <div class="col-md-6">
                                                <input type="text" id="reg_num" name="reg_num" required="required" value="<?php echo $reg_num; ?>" class="form-control input-circle" placeholder="Reg. No.">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Program type</label>
                                            <div class="col-md-6">
                                                <input type="text" id="prog_type" name="prog_type" required="required" value="<?php echo $program_type; ?>" class="form-control input-circle" placeholder="Program type">

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Passport</label>
                                            <div class="col-md-6">
                                                <input type="file" name="file" required="required">

                                            </div>

                                        </div>

                                    </div>
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" name="register" class="btn btn-primary "><span class="fa fa-plus"></span> Add Staff</button>
                                                <button type="reset" name="reset" class="btn btn-default">Cancel</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->

    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
            <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
            <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->

    <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <?php include_once 'jquery1.php'; ?>
</body>

</html>
<?php
$pageTitle = "Registered patrons";
include_once 'header.php';
$side_navigation_active = 'registered_patrons';
?>
<html lang="en">
    <!--<![endif]-->

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
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">Dashboard</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <!-- BEGIN DASHBOARD STATS 1-->

                    <div class="clearfix"></div>
                    <!-- END DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">


                                <div class="portlet-title">
                                    <div class="caption">
                                        Registered patrons <span class="badge badge-blue"> 100 </span></div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-hover" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> Date </th>
                                                <th> Time </th>
                                                <th> Staff rep</th>
                                                <th> Student </th>
                                                <th> Library No./Reg No. </th>
                                                <th> Department </th>
                                                <th> Program </th>
                                                <th> Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1 </td>
                                                <td> 02/02/2016</td>
                                                <td> 10:00am</td>
                                                <td> Mrs. Chinyere Udoma</td>
                                                <td> Mbanefoh Odira </td>
                                                <td> 2011524023 </td>
                                                <td> English & Literature </td>
                                                <td> Regular </td>
                                                <td> <span class="label label-info"> Active </span> </td>
                                            </tr>
                                            <tr>
                                                <td> 2 </td>
                                                <td> 02/02/2016</td>
                                                <td> 10:50am</td>
                                                <td> Mrs. Chinyere Udoma</td>
                                                <td> Umeh Cynthia </td>
                                                <td> 2015201023</td>
                                                <td> Polymer and Textile </td>
                                                <td> Regular </td>
                                                <td> <span class="label label-info"> Active </span> </td>
                                            </tr>
                                            <tr>
                                                <td> 3 </td>
                                                <td> 05/02/2016</td>
                                                <td> 3:00pm</td>
                                                <td> Mrs. Chinyere Udoma</td>
                                                <td> Ekene Ifeanyi </td>
                                                <td> 2011524023 </td>
                                                <td> phycology </td>
                                                <td> Regular </td>
                                                <td> <span class="label label-info"> Active </span> </td>
                                            </tr>
                                            <tr>
                                                <td> 4 </td>
                                                <td> 10/02/2016</td>
                                                <td> 10:00am</td>
                                                <td> Mr. Benjamin Franklin</td>
                                                <td> Nwosa Ujunwa </td>
                                                <td> 2013524023 </td>
                                                <td> Education Foundation </td>
                                                <td> Regular </td>
                                                <td> <span class="label label-info"> Active </span> </td>
                                            </tr>
                                            <tr>
                                                <td> 5 </td>
                                                <td> 02/03/2016</td>
                                                <td> 3:00pm</td>
                                                <td> Mrs. Chinyere Udoma</td>
                                                <td> Okorie Chindinma </td>
                                                <td> 2011522054 </td>
                                                <td> Chemical Engineering </td>
                                                <td> Regular </td>
                                                <td> <span class="label label-info"> Active </span> </td>
                                            </tr>
                                            <tr>
                                                <td> 6 </td>
                                                <td> 03/04/2016</td>
                                                <td> 11:57am</td>
                                                <td> Mr. Benjamin Franklin</td>
                                                <td> Abigael Etim </td>
                                                <td> 2011524023 </td>
                                                <td> English Language </td>
                                                <td> Regular </td>
                                                <td> <span class="label label-info"> Active </span> </td>
                                            </tr>
                                            <tr>
                                                <td> 7 </td>
                                                <td> 03/05/2016</td>
                                                <td> 12:50pm</td>
                                                <td> Mrs. Chinyere Udoma</td>
                                                <td> Ebubechukwu Francis </td>
                                                <td> 2011453231 </td>
                                                <td> Mathematics </td>
                                                <td> Regular </td>
                                                <td> <span class="label label-info"> Active </span> </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>

                    </div>










                    <!-- END PAGE BASE CONTENT -->
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
        <?php include_once 'jquery.php'; ?>
    </body>

</html>



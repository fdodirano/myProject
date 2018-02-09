<?php 
$pageTitle = "Home Dashboard";
include_once 'header.php';
$side_navigation_active = 'My account';

?>
<html lang="en">
    <!--<![endif]-->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md">
        <!-- BEGIN HEADER -->
        <?php   include_once 'u_header.php'; ?>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
             <?php require_once 'side_nav_cir.php';?>
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
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                <div class="visual">
                                    <i class="fa fa-comments"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="200,000">0</span>
                                    </div>
                                    <div class="desc"> Number of Borrowed books </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                <div class="visual">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="400">0</span></div>
                                    <div class="desc"> Number of Overdue books </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="5000">0</span>
                                    </div>
                                    <div class="desc"> Checked in patrons </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                                <div class="visual">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="500"></span> </div>
                                    <div class="desc"> Registered patrons </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <!-- END DASHBOARD STATS 1-->
                    <div class="row">
                        <div class="col-lg-8 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Recent Activities</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn btn-sm blue btn-outline btn-circle" href="javascript:;" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Filter By
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" /> Finance
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" checked="" /> Membership
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" /> Customer Support
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" checked="" /> HR
                                                    <span></span>
                                                </label>
                                                <label class="mt-checkbox mt-checkbox-outline">
                                                    <input type="checkbox" /> System
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="scroller" style="height: 500px;" data-always-visible="1" data-rail-visible="0">
                                        <ul class="feeds">
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Mrs. Okafor Nkechi charged two book to Umeh Cynthia.
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> Just now </div>
                                                </div>
                                            </li>
                                            <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-success">
                                                                    <i class="fa fa-bar-chart-o"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> A book was discharged from Mbanefoh Samuel by Mr. Denis Madu </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> today at 09:15am</div>
                                                    </div>
                                            </li>
                                            
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-danger">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Mrs. Joy Jonathan registered a new patron (Stephanie Asher) </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> today at 09:30am </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-danger">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Mrs. Joy Jonathan registered a new patron (Umeh Cynthia) </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> today at 09:45am </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-danger">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Mrs. Joy Jonathan registered a new patron (Emeka Nnwakwo) </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> today at 10:00am </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Mrs. Chinyere udoma processed a fine for Nduka Chinedu
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> today at 10:40am </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-success">
                                                                <i class="fa fa-user"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Mrs. Chinyere udoma renewed two books for Nneoma Akaeze </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> today at 12:22pm </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-default">
                                                                <i class="fa fa-bell-o"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Mrs. Chinyere udoma indicated a book damaged by Ebere Nwachukwu
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> today at 02:12pm </div>
                                                </div>
                                            </li>
                                            <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-default">
                                                                    <i class="fa fa-briefcase"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> Mrs. Chinyere udoma printed Esther Azuka's Library I.D card </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"> yesterday at 10:59am </div>
                                                    </div>
                                            </li>
                                            <li>
                                                <div class="col1">
                                                    <div class="cont">
                                                        <div class="cont-col1">
                                                            <div class="label label-sm label-info">
                                                                <i class="fa fa-check"></i>
                                                            </div>
                                                        </div>
                                                        <div class="cont-col2">
                                                            <div class="desc"> Mrs. Chinyere Udoma reprinted Eze Paul's I.D card
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col2">
                                                    <div class="date"> Nov 9 at 03:24pm </div>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="scroller-footer">
                                        <div class="btn-arrow-link pull-right">
                                            <a href="javascript:;">See All Records</a>
                                            <i class="icon-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-xs-12 col-sm-12">
                            <!-- BEGIN PORTLET-->
                            
                            <!-- BEGIN SAMPLE TABLE PORTLET-->
                            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-bar-chart-o"></i> Statistics </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td><b> Charged books </b>  </td>
                                                    <td>
                                                        <span class="badge badge-primary"> 1586 </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Discharged books</b>  </td>
                                                    <td>
                                                        <span class="badge badge-primary"> 543 </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> <b>Registered patrons</b> </td>
                                                    <td>
                                                        <span class="badge badge-primary"> 560 </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> <b>printed ID cards</b> </td>
                                                    <td>
                                                        <span class="badge badge-primary"> 390 </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> <b>Reprinted ID cards</b> </td>
                                                    <td>
                                                        <span class="badge badge-primary"> 20 </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Recorded damaged books</b>  </td>
                                                    <td>
                                                        <span class="badge badge-primary"> 10 </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Recorded lost books</b>  </td>
                                                    <td>
                                                        <span class="badge badge-primary"> 8 </span>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END SAMPLE TABLE PORTLET-->
                        
                            <!-- END PORTLET-->
                        </div>
                        
                        
                    </div>
                    
                    
                    
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            
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
        
        <?php include_once 'jquery.php'; ?>
    </body>

</html>
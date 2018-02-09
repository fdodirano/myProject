<?php
$pageTitle = "Register new patrons";
include_once 'header1.php';
$side_navigation_active = 'register_new_patrons';
include 'connect.php';
?>

<?php
$accession_no = "";
$book_type = "";
$book_cat = "";
$call_no = "";
$isbn = "";
$title = "";
$subtitle = "";
$author1 = "";
$author2 = "";
$edition = "";
$series = "";
$volume = "";
$publishers = "";
$place_of_pub = "";
$pages_no = "";
$book_size = "";
$date_purchased = "";
$purchased_price = "";
$qty_purchased = "";
$vendor = "";
$remark = "";
$result = "";



if (isset($_POST['add_books'])) {
    $accession_no = $_POST['accession_no'];
    $book_type = $_POST['book_type'];
    $book_cat = $_POST['book_cat'];
    $call_no = $_POST['call_no'];
    $isbn = $_POST['isbn'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $author1 = $_POST['author1'];
    $author2 = $_POST['author2'];
    $edition = $_POST['edition'];
    $series = $_POST['series'];
    $volume = $_POST['volume'];
    $publishers = $_POST['publishers'];
    $place_of_pub = $_POST['place_of_pub'];
    $pages_no = $_POST['pages_no'];
    $book_size = $_POST['book_size'];
    $date_purchased = $_POST['date_purchased'];
    $purchased_price = $_POST['purchased_price'];
    $qty_purchased = $_POST['qty_purchased'];
    $vendor = $_POST['vendor'];
    $remark = $_POST['remark'];
    
    require 'connect.php';
    $sql = "INSERT INTO `books` (`accession_no`, `book_type`, `book_cat`, `call_no`, `isbn`, `title`, `subtitle`, `author1`, `author2`, `edition`, `series`, `volume`, `publishers`, `place_of_pub`, `pages_no`, `book_size`, `date_purchased`, `purchased_price`, `qty_purchased`, `vendor`, `remark`) VALUES ('$accession_no', '$book_type', '$book_cat', '$call_no', '$isbn', '$title', '$subtitle', '$author1', '$author2', '$edition', '$series', '$volume', '$publishers', '$place_of_pub', '$pages_no', '$book_size', '$date_purchased', '$purchased_price', '$qty_purchased' '$vendor', '$remark')";
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    
    
}
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



                        <div class="col-md-8">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <span class="caption-subject bold font-green uppercase">Add new books</span>
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <?php
                                    if ($result == "") {
                                        
                                    } elseif ($result == TRUE) {
                                        echo '<div class="alert alert-success"> Successfully registered </div>';
                                    } elseif ($result == FALSE) {
                                        echo '<div class="alert alert-danger"> Could not complete registration </div>';
                                    }
                                    ?>
                                    <form role="form" action="Add_books.php" method="POST">
                                        <h3 class="form-section">Book Identification</h3><br>

                                        <div class="form-group">
                                            <label class="control-label">Accession number</label>
                                            <input type="text" name="accession_no" placeholder="Accession number" required="required" value="<?php echo $accession_no?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Book type</label>
                                            <input type="text" name="book_type" placeholder="Book type" required="required" value="<?php echo $book_type?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Book category</label>
                                            <input type="text" name="book_cat" placeholder="Book category" required="required" value="<?php echo $book_cat?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Call number</label>
                                            <input type="text" name="call_no" placeholder="call number" required="required" value="<?php echo $call_no?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">ISBN</label>
                                            <input type="text" name="isbn" placeholder="ISBN" required="required" value="<?php echo $isbn?>" class="form-control" /> </div>
                                        <h3 class="form-section">Book Title</h3><br>    
                                        <div class="form-group">
                                            <label class="control-label">Title</label>
                                            <input type="text" name="title" placeholder="Title" required="required" value="<?php echo $title?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Subtitle</label>
                                            <input type="text" name="subtitle" placeholder="Subtitle" value="<?php echo $subtitle?>" class="form-control" /> </div>


                                        <div class="form-group mt-repeater">
                                            <div data-repeater-list="group-b">
                                                <div class="mt-repeater-item">
                                                    <label class="control-label">Author</label>
                                                    <input type="text" name="author1" placeholder="Author" required="required" value="<?php echo $author1?>" class="form-control" /> </div>
                                                <div data-repeater-item class="mt-repeater-item mt-overflow">
                                                    <label class="control-label">Co-Author</label>
                                                    <div class="mt-repeater-cell">
                                                        <input type="text" name="author2" placeholder="Co-Author" value="<?php echo $author2?>" class="form-control mt-repeater-input-inline" />
                                                        <a href="javascript:;" data-repeater-delete class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline">
                                                            <i class="fa fa-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:;" name="add_author" data-repeater-create class="btn btn-success mt-repeater-add">
                                                <i class="fa fa-plus"></i> Add Author</a>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Edition</label>
                                            <input type="text" name="edition" placeholder="Edition" required="required" value="<?php echo $edition?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Series</label>
                                            <input type="text" name="series" placeholder="Series" value="<?php echo $series?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Volume</label>
                                            <input type="text" name="volume" placeholder="Enter book's volume" value="<?php echo $volume?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Publishers</label>
                                            <input type="text" name="publishers" placeholder="Enter name of Publishers" required="required" value="<?php echo $publishers?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Place of publication</label>
                                            <input type="text" name="place_of_pub" placeholder="Enter place of publication" value="<?php echo $place_of_pub?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Number of pages </label>
                                            <input type="text" name="pages_no" placeholder="Enter number of pages of the book" required="required" value="<?php echo $pages_no?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Book size</label>
                                            <input type="text" name="book_size" placeholder="enter size of book" required="required" value="<?php echo $book_size?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Date purchased</label>
                                            <input type="text" name="date_purchased" placeholder="Date purchased" required="required" value="<?php echo $date_purchased?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Purchased price</label>
                                            <input type="text" name="purchased_price" placeholder="Purchased price" required="required" value="<?php echo $purchased_price?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Quantity</label>
                                            <input type="text" name="qty_purchased" placeholder="Available quantity" required="required" value="<?php echo $qty_purchased?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Vendor</label>
                                            <input type="text" name="vendor" placeholder="Vendor" required="required" value="<?php echo $vendor?>" class="form-control" /> </div>
                                        <div class="form-group">
                                            <label class="control-label">Remark</label>
                                            <input type="text" name="remark" placeholder="Remark or short note" value="<?php echo $remark?>" class="form-control" /> </div>


                                        <div class="margin-top-10">
                                            <button class="btn green" name="add_books" type="submit">Add books </button>
                                            <button class="btn default" type="reset" name="reset">Cancel </button>
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
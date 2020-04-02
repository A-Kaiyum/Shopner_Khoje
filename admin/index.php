<?php
 session_start();
  if(empty($_SESSION['user_id']) && $_SESSION['user_type']==''){
    header("Location:login.php");
    exit();
  }
include("dbconnection/DBconnection.php");
include("model/member.php");
include("model/donor.php");
include("model/people.php");
include("model/dashboard.php");


$getMember = new members();
$getMember = $getMember->getMembers();
$getDonor = new donors();
$getDonor = $getDonor->getDonors();

$getDonation = new dashboard();
$getDonation = $getDonation->getDonation();
$getPeople = new peoples();
$getPeople = $getPeople->getPeoples();

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Shopner Khuje</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
             <?php include("includes/topbar.php"); ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php include("includes/sidebar.php"); ?>

            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-header-title">
                                    <h4 class="pull-left page-title">Dashboard</h4>
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="#">Xadmino</a></li>
                                        <li class="active">Dashboard</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Members</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b>

                                 <!--count data must be an array or object -->

                                        <?= count($getMember);?>

                                    </b></h3>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Donors</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b>
                                            
                                            <?= count($getDonor);?>
                                                
                                            </b></h3>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Peoples</h4>
                                    </div>
                                    <div class="panel-body">
                                        <h3 class=""><b>

                                            <?= count($getPeople);?>
                                                

                                            </b></h3>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="panel panel-primary text-center">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Total Donation</h4>
                                    </div>
                                    <div class="panel-body">
                                    <h3>  
                                                                          
                                        <?= $getDonation?>

                                      </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <h4 class="m-t-0">Revenue</h4>
                                        <ul class="list-inline m-t-30 widget-chart text-center">
	                                		<li>
                                                <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                                <h4 class=""><b>5248</b></h4>
	                                			<h5 class="text-muted m-b-0">Marketplace</h5>
	                                		</li>
	                                		<li>
                                                <i class="mdi mdi-arrow-down-bold-circle text-danger"></i>
                                                <h4 class=""><b>321</b></h4>
	                                			<h5 class="text-muted m-b-0">Last week</h5>
	                                		</li>
	                                		<li>
                                                <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                                <h4 class=""><b>964</b></h4>
	                                			<h5 class="text-muted m-b-0">Last Month</h5>
	                                		</li>
	                                	</ul>
                                        <div id="sparkline1" style="margin: 0 -21px -22px -22px;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <h4 class="m-t-0">Email Sent</h4>
                                        <ul class="list-inline m-t-30 widget-chart text-center">
	                                		<li>
                                                <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                                <h4 class=""><b>3654</b></h4>
	                                			<h5 class="text-muted m-b-0">Marketplace</h5>
	                                		</li>
	                                		<li>
                                                <i class="mdi mdi-arrow-down-bold-circle text-danger"></i>
                                                <h4 class=""><b>954</b></h4>
	                                			<h5 class="text-muted m-b-0">Last week</h5>
	                                		</li>
	                                		<li>
                                                <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                                <h4 class=""><b>8462</b></h4>
	                                			<h5 class="text-muted m-b-0">Last Month</h5>
	                                		</li>
	                                	</ul>
                                        <div id="sparkline2" style="margin: 0 -21px -22px -22px;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <h4 class="m-t-0">Monthly Subscriptions</h4>
                                        <ul class="list-inline m-t-30 widget-chart text-center">
	                                		<li>
                                                <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                                <h4 class=""><b>3256</b></h4>
	                                			<h5 class="text-muted m-b-0">Marketplace</h5>
	                                		</li>
	                                		<li>
                                                <i class="mdi mdi-arrow-down-bold-circle text-danger"></i>
                                                <h4 class=""><b>785</b></h4>
	                                			<h5 class="text-muted m-b-0">Last week</h5>
	                                		</li>
	                                		<li>
                                                <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                                <h4 class=""><b>1546</b></h4>
	                                			<h5 class="text-muted m-b-0">Last Month</h5>
	                                		</li>
	                                	</ul>
                                        <div id="sparkline3" style="margin: 0 -21px -22px -22px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                      

                        </div> <!-- End Row -->


                    </div> <!-- container -->

                </div> <!-- content -->

                   <?php include("includes/footer.php"); ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Datatables-->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>

        <script src="assets/pages/dashborad.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
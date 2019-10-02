<?php 
session_start();

    include "db.php";
    if (!isset($_SESSION['id'])){
        echo '<script>window.location="index.php"</script>';

    }
    $id = $_SESSION['id'];
    include 'act.php';
?>

 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Success Africa  </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
        
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/custom_dt_html5.css">
    <link href="assets/css/default-dashboard/style.css" rel="stylesheet" type="text/css" />  
    <!-- END PAGE LEVEL CUSTOM STYLES -->

</head>
<body>
    <!-- <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div> -->
    <!-- Tab Mobile View Header -->
    <!-- <header class="tabMobileView header navbar fixed-top d-lg-none"> -->
        <!-- <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
        </div> -->

    <!-- </header> -->
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="tabMobileView header navbar fixed-top navbar-expand-sm ">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>
       


        


        <ul class="navbar-nav flex-row ml-lg-auto">
        <a href="home.php" class=""> <img src="assets/img/logo-3.png" class="img-fluid" alt="logo"></a>


              <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1" style="right: 10px;position: absolute;">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-user-12"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown" style="right:5px;">
                    <a class="dropdown-item" href="">
                        <i class="mr-1 flaticon-user-6"></i> <span><?php echo$_SESSION['name'];?></span>
                    </a>
                    <a class="dropdown-item" href="logout.php">
                        <i class="mr-1 flaticon-power-button"></i> <span>Log Out</span>
                    </a>
                </div>
            </li>

            
        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    <li class="nav-item d-flex">
                        <a href="home.php" class="navbar-brand">
                            <img src="assets/img/logo-3.png" class="img-fluid" alt="logo">
                        </a>
                        <p class="border-underline"></p>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="home.php" class="nav-link"> SA </a>
                    </li>
                </ul>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu" style="color:white;">
                        <a href="home.php">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Home</span>
                            </div>

                            <div>
                               
                            </div>
                        </a>
                        
                    </li>
                                                                          
                    <li class="menu">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-cart-bag"></i>
                                <span>Sales</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample"> 
                        <?php 
                            if($_SESSION['loc'] == 'ucc') {
                                echo ' <li>
                                <a href="ucc.php"> UCC </a>
                                </li>';

                            }elseif ($_SESSION['loc'] == 'legon') {
                                echo ' <li>
                                <a href="lg.php">LEGON</a>
                                </li>';

                            }elseif ($_SESSION['loc'] == 'knust') {
                                echo '<li>
                                <a href="knust.php"> KNUST </a>
                                </li>';

                            }elseif ($_SESSION['loc'] == 'hotech') {
                                echo '<li>
                                <a href="ho.php"> HO TECH </a>
                                </li>';
                            }else{
                                echo 'unknown location';
                            }

                        ?>
                        
                        </ul>
                    </li>                

                <li class="menu">
                    <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="flaticon-user-group"></i>
                            <span>Volunteer</span>
                        </div>
                        <div>
                            <i class="flaticon-right-arrow"></i>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                        <li>
                            <a href="addvol.php"> Add Volunteer </a>
                        </li>
                        <li>
                            <a href="volunter.php"> View Volunteers </a>
                        </li>                    
                    </ul>
                </li>

                <li class="menu">
                        <a href="#ecommerce" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <i class="flaticon-user-group"></i>
                                <span>Sub-Admins</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ecommerce" data-parent="#accordionExample">
                            <li>
                                <a href="adsubadmin.php"> Add Sub-Admin </a>
                            </li>
                            <li>
                                <a href="subadmin.php"> View Sub-Admin </a>
                            </li>           
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#ui-features" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-elements"></i>
                                <span>Vouchers</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ui-features" data-parent="#accordionExample">
                        <?php 
                            if($_SESSION['loc'] == 'ucc') {
                                echo ' <li>
                                <a href="voucherUC.php">UCC - Vouchers</a>
                                 </li>';

                            }elseif ($_SESSION['loc'] == 'legon') {
                                echo ' <li>
                                <a href="voucherLE.php"> LEGON - Vouchers </a>
                                 </li>';

                            }elseif ($_SESSION['loc'] == 'knust') {
                                echo ' <li>
                                <a href="voucherKN.php"> KNUST - Vouchers </a>
                                </li>';

                            }elseif ($_SESSION['loc'] == 'hotech') {
                                echo '<li>
                                <a href="voucherHT.php"> HoTECH - Vouchers </a>
                                 </li>';
                            }else{
                                echo 'unknown location';
                            }

                        ?>
                        </ul>
                    </li>

                    
                </ul>
            </nav>

        </div>

        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content"> 
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>
                        <?php 
                            if($_SESSION['loc'] == 'ucc') {
                                echo 'UNIVERSITY OF CAPE COAST';

                            }elseif ($_SESSION['loc'] == 'legon') {
                                echo 'UNIVERSITY OF GHANA';

                            }elseif ($_SESSION['loc'] == 'knust') {
                                echo 'KWAME NKRUMAH UNIVERSITY OF SCIENCE AND TECHNOLOGY';

                            }elseif ($_SESSION['loc'] == 'hotech') {
                                echo 'HO TECHNICAL UNIVERSITY';
                            }else{
                                echo 'unknown location';
                            }

                        ?>
                        </h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Venue</a></li>
                               
                                <li class="active">
                                    <a href="#">
                                        <?php 
                                            if($_SESSION['loc'] == 'ucc') {
                                                echo 'UNIVERSITY OF CAPE COAST';

                                            }elseif ($_SESSION['loc'] == 'legon') {
                                                echo 'UNIVERSITY OF GHANA';

                                            }elseif ($_SESSION['loc'] == 'knust') {
                                                echo 'KWAME NKRUMAH UNIVERSITY OF SCIENCE AND TECHNOLOGY';

                                            }elseif ($_SESSION['loc'] == 'hotech') {
                                                echo 'HO TECHNICAL UNIVERSITY';
                                            }else{
                                                echo 'unknown location';
                                            }

                                        ?>
                                    </a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


        <!-- <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>LEGON</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Venue</a></li>
                               
                                <li class="active"><a href="#">LEGON</a> </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                
                <div class="row" id="cancel-row">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>
                                        <?php 
                                            if($_SESSION['loc'] == 'ucc') {
                                                echo 'UNIVERSITY OF CAPE COAST';

                                            }elseif ($_SESSION['loc'] == 'legon') {
                                                echo 'UNIVERSITY OF GHANA';

                                            }elseif ($_SESSION['loc'] == 'knust') {
                                                echo 'KWAME NKRUMAH UNIVERSITY OF SCIENCE AND TECHNOLOGY';

                                            }elseif ($_SESSION['loc'] == 'hotech') {
                                                echo 'HO TECHNICAL UNIVERSITY';
                                            }else{
                                                echo 'unknown location';
                                            }

                                        ?>
                                        </h4>
                                    </div>                 
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="html5-extension" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Voucher</th>
                                                <th>Status</th>
                                                <th>Sold By</th>
                                                <th>Sold To</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $loc = $_SESSION['loc'];
                                                echo getVouch($loc, $conn);
                                            
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div> 

            </div>
        </div>
        <!--  END CONTENT PART  -->
    </div>
    <!-- END MAIN CONTAINER -->
    
    <!--  BEGIN FOOTER  -->
    <footer class="footer-section theme-footer">

        <div class="footer-section-1  sidebar-theme">
            
        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">

                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                        <p class="bottom-footer">&#xA9; <?php echo date('Y');?> <a target="_blank" href="http://purplesofts.com">Purplesoftware</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--  END FOOTER  -->

    <!--  BEGIN CONTROL SIDEBAR  -->

    <!--  END CONTROL SIDEBAR  -->
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="ajax_gtv.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <!-- <script src="plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="plugins/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="plugins/table/datatable/button-ext/buttons.print.min.js"></script> -->
    <script>
        $('#html5-extension').DataTable( {
            searching: false,
            sorting: false,
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
            // buttons: {
            //     buttons: [
            //         { extend: 'copy', className: 'btn btn-default btn-rounded btn-sm mb-4' },
            //         { extend: 'csv', className: 'btn btn-default btn-rounded btn-sm mb-4' },
            //         { extend: 'excel', className: 'btn btn-default btn-rounded btn-sm mb-4' },
            //         { extend: 'print', className: 'btn btn-default btn-rounded btn-sm mb-4' }
            //     ]
            // },
            "language": {
                "paginate": {
                  "previous": "<i class='flaticon-arrow-left-1'></i>",
                  "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        } );
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
</body>

</html>
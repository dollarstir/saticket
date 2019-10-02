
<?php 
session_start();
include "db.php";



if (!isset($_SESSION['id']))

{


    echo '<script>window.location="index.php"</script>';

}

include "core.php";

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

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="assets/css/support-chat.css" rel="stylesheet" type="text/css" />
    <link href="plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
    <link href="plugins/charts/chartist/chartist.css" rel="stylesheet" type="text/css">
    <link href="assets/css/default-dashboard/style.css" rel="stylesheet" type="text/css" />   
    <link rel="stylesheet" href="custom.css" type="text/css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->   
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style1.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>
<body class="default-sidebar">
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>

    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="index.html" class=""> <img src="assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none"> 
                <form class="form-inline justify-content-end" role="search">
                    <input type="text" class="form-control search-form-control mr-3">
                </form>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="header navbar fixed-top navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>
       


        


        <ul class="navbar-nav flex-row ml-lg-auto">
            
          

            


            <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-user-12"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="dropdown-divider"></div>
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
                <!-- <div class="page-header">
                    <div class="page-title">
                        <h3>Dashboard</h3>
                    </div>
                </div> -->

                <div class="row layout-spacing ">
                <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3> UG Dashboard</h3>
                    <ul>
                        <li>
                            <a href="home.php">Home</a>
                        </li>
                        <li>University of Ghana</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Dashboard summery Start Here -->
                <div class="row gutters-20">
                 
                </div>
                <!-- Dashboard summery End Here -->
                <!-- Dashboard Content Start Here -->
                <div class="row gutters-20">
                   
              
                    <div class="col-lg-6 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-six pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Total Voucher</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-money"></i>
                                </div>
                                 <div class="media-body text-right">
                                <p class="widget-text mb-0">Total Voucher</p>
                                <p class="widget-numeric-value">
                               </p>
                                   </div>
                                 </div>
                                <div class="media-body text-left">
                                    <p class="widget-text mb-0">Total var : 
                                    <span class="widget-numeric-value">
                                        <?php
                                           
                                            $sql = "SELECT * FROM voucher WHERE location = 'legon'";
                                            $count = 0;
                                            $query = mysqli_query($conn, $sql);

                                            while(mysqli_fetch_array($query)) {
                                            $count = $count + 1;
                                            };

                                            echo $count;
                                        ?>
                                    </span>
                                    </p>                               
                     </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-six pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Vouchers Sold</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-money"></i>
                                </div>
                                 <div class="media-body text-right">
                                <p class="widget-text mb-0"> No. of Vouchers Sold</p>
                                <p class="widget-numeric-value">
                               </p>
                                   </div>
                                 </div>
                                <div class="media-body text-left">
                                    <p class="widget-text mb-0">Vouchers Sold : 
                                    <span class="widget-numeric-value">
                                        <?php                                         
                                            $sql = "SELECT * FROM voucher WHERE status = 'sold' AND location = 'legon'";
                                            $count = 0;
                                            $query = mysqli_query($conn, $sql);

                                            while(mysqli_fetch_array($query)) {
                                            $count = $count + 1;
                                            };

                                            echo $count;
                                        ?>
                                    </span>
                                    </p>                               
                     </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-six pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Vouchers Sold by Cash</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-money"></i>
                                </div>
                                 <div class="media-body text-right">
                                <p class="widget-text mb-0"> No of Vouchers Sold by Cash</p>
                                <p class="widget-numeric-value">
                               </p>
                                   </div>
                                 </div>
                                <div class="media-body text-left">
                                    <p class="widget-text mb-0">Vouchers Sold : 
                                    <span class="widget-numeric-value">
                                        <?php                                        
                                            $sql = "SELECT * FROM voucher WHERE mop = 'cash' AND location = 'legon'";
                                            $count = 0;
                                            $query = mysqli_query($conn, $sql);

                                            while(mysqli_fetch_array($query)) {
                                            $count = $count + 1;
                                            };

                                            echo $count;
                                        ?>
                                    </span>
                                    </p>                               
                     </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-six pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Vouchers Sold by MoMo</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-money"></i>
                                </div>
                                 <div class="media-body text-right">
                                <p class="widget-text mb-0"> No of Vouchers Sold by MoMo</p>
                                <p class="widget-numeric-value">
                               </p>
                                   </div>
                                 </div>
                                <div class="media-body text-left">
                                    <p class="widget-text mb-0">Vouchers Sold : 
                                    <span class="widget-numeric-value">
                                        <?php
                                           
                                            $sql = "SELECT * FROM voucher WHERE mop = 'momo' AND location = 'legon'";
                                            $count = 0;
                                            $query = mysqli_query($conn, $sql);

                                            while(mysqli_fetch_array($query)) {
                                            $count = $count + 1;
                                            };

                                            echo $count;
                                        ?>
                                    </span>
                                    </p>                               
                     </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-six pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Vouchers Available</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-money"></i>
                                </div>
                                 <div class="media-body text-right">
                                <p class="widget-text mb-0"> No of Vouchers Available</p>
                                <p class="widget-numeric-value">
                               </p>
                                   </div>
                                 </div>
                                <div class="media-body text-left">
                                    <p class="widget-text mb-0">Available Vouchers : 
                                    <span class="widget-numeric-value">
                                        <?php
                                           
                                            $sql = "SELECT * FROM voucher WHERE location = 'legon'";
                                            $count = 0;
                                            $query = mysqli_query($conn, $sql);

                                            while(mysqli_fetch_array($query)) {
                                            $count = $count + 1;
                                            };

                                            echo $count;
                                        ?>
                                    </span>
                                    </p>                               
                     </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-six pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Number of Volunters</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-money"></i>
                                </div>
                                 <div class="media-body text-right">
                                <p class="widget-text mb-0"> No of Volunters</p>
                                <p class="widget-numeric-value">
                               </p>
                                   </div>
                                 </div>
                                <div class="media-body text-left">
                                    <p class="widget-text mb-0">Volunters : 
                                    <span class="widget-numeric-value">
                                        <?php
                                          

                                            $sql = "SELECT * FROM volunter WHERE location = 'legon'";
                                            $count = 0;
                                            $query = mysqli_query($conn, $sql);

                                            while(mysqli_fetch_array($query)) {
                                            $count = $count + 1;
                                            };

                                            echo $count;
                                        ?>
                                    </span>
                                    </p>                               
                     </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-six pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Total Male Attendence</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-money"></i>
                                </div>
                                 <div class="media-body text-right">
                                <p class="widget-text mb-0">Total Male Attendence</p>
                                <p class="widget-numeric-value">
                               </p>
                                   </div>
                                 </div>
                                <div class="media-body text-left">
                                    <p class="widget-text mb-0">Male Attendence : 
                                    <span class="widget-numeric-value">
                                        <?php
                                           

                                            $sql = "SELECT * FROM voucher WHERE gender = 'male' AND attendStatus = 'Attended' AND location = 'legon'";
                                            $count = 0;
                                            $query = mysqli_query($conn, $sql);

                                            while(mysqli_fetch_array($query)) {
                                            $count = $count + 1;
                                            };

                                            echo $count;
                                        ?>
                                    </span>
                                    </p>                               
                     </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-six pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Total Female Attendence</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-money"></i>
                                </div>
                                 <div class="media-body text-right">
                                <p class="widget-text mb-0">Total Female Attendence</p>
                                <p class="widget-numeric-value">
                               </p>
                                   </div>
                                 </div>
                                <div class="media-body text-left">
                                    <p class="widget-text mb-0">Female Attendence : 
                                    <span class="widget-numeric-value">
                                        <?php

                                            $sql = "SELECT * FROM voucher WHERE gender = 'female' AND attendStatus = 'Attended' AND location = 'legon'";
                                            $count = 0;
                                            $query = mysqli_query($conn, $sql);

                                            while(mysqli_fetch_array($query)) {
                                            $count = $count + 1;
                                            };

                                            echo $count;
                                        ?>
                                    </span>
                                    </p>                               
                     </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-4-xxxl">
                        <div class="card dashboard-card-six pd-b-20">
                            <div class="card-body">
                                <div class="heading-layout1 mg-b-17">
                                    <div class="item-title">
                                        <h3>Total Attendence</h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false">...</a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media">
                                <div class="icon ml-2">
                                    <i class="flaticon-money"></i>
                                </div>
                                 <div class="media-body text-right">
                                <p class="widget-text mb-0">Total Attendence</p>
                                <p class="widget-numeric-value">
                               </p>
                                   </div>
                                 </div>
                                <div class="media-body text-left">
                                    <p class="widget-text mb-0"> Attendence : 
                                    <span class="widget-numeric-value">
                                        <?php

                                            $sql = "SELECT * FROM voucher WHERE attendStatus = 'Attended' AND location = 'legon'";
                                            $count = 0;
                                            $query = mysqli_query($conn, $sql);

                                            while(mysqli_fetch_array($query)) {
                                            $count = $count + 1;
                                            };

                                            echo $count;
                                        ?>
                                    </span>
                                    </p>                               
                     </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard Content End Here -->
               
                <!-- Footer Area Start Here -->
                <footer class="footer-section theme-footer">

<!-- <div class="footer-section-1  sidebar-theme">
    
</div> -->

<div class="footer-section-2 container-fluid">
    <div class="row">
        <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
            <ul class="list-inline links ml-sm-5">
                <li class="list-inline-item mr-3">
                    <a href="javascript:void(0);">Home</a>
                </li>
                <li class="list-inline-item mr-3">
                    <a href="javascript:void(0);">Blog</a>
                </li>
                <li class="list-inline-item mr-3">
                    <a href="javascript:void(0);">About</a>
                </li>
                <li class="list-inline-item">
                    <a href="javascript:void(0);">Buy</a>
                </li>
            </ul>
        </div>
        <div class="col-xl-5 col-md-6 col-sm-6 col-12">
            <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                <li class="list-inline-item  mr-3">
                    <p class="bottom-footer">&#xA9; 2019 <a target="_blank" href="http://purplesofts.com">Ticket order</a></p>
                </li>
                <li class="list-inline-item align-self-center">
                    <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                </li>
            </ul>
        </div>
    </div>
</div>
</footer>
                <!-- Footer Area End Here -->
            </div>

                </div>
            </div> 
        </div>
   

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/charts/chartist/chartist.js"></script>
    <script src="plugins/maps/vector/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="plugins/maps/vector/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js"></script>
    <script src="plugins/calendar/pignose/moment.latest.min.js"></script>
    <script src="plugins/calendar/pignose/pignose.calendar.js"></script>
    <script src="plugins/progressbar/progressbar.min.js"></script>
    <script src="assets/js/default-dashboard/default-custom.js"></script>
    <script src="assets/js/support-chat.js"></script>

    <script>
    
        $(document).ready(function () {
            

            // setInterval(() => {
                
            //     $("#getorder").load('tts.php');
            //     $("#tsold").load('soldv.php');
            //     $("#vavl").load('vav.php');
            //     $("#tdy").load('stoday.php');
                
            // }, 1000);
            
        });
    
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
   
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from designreset.com/preview-equation/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Apr 2019 15:32:34 GMT -->
</html>
<?php 
session_start();

    include "db.php";
    if (!isset($_SESSION['id'])){
        echo '<script>window.location="../admin/index.php"</script>';

    }
    $volid = $_SESSION['id'];
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
        
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/custom_dt_html5.css">
    <link href="assets/css/default-dashboard/style.css" rel="stylesheet" type="text/css" />  
    <!-- END PAGE LEVEL CUSTOM STYLES -->

</head>
<body>
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>
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

        <?php include "sidebar.php";?>

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


                <div class="row layout-spacing ">

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-income-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">All Sold</p>
                                        <p class="widget-numeric-value">
                                        </p>
                                    </div>
                                </div>
                                <div class="media-body text-left">
                                    <p class="widget-text mb-0">Voucher : 
                                        <span class="widget-numeric-value">
                                            <?php
                                                $sql = "SELECT * FROM voucher WHERE status='sold' AND volid='$volid'";
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


                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-income-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0">Target</p>
                                        <p class="widget-numeric-value">
                                        </p>
                                    </div>
                                </div>
                                <div class="media-body text-left">
                                    <p class="widget-text mb-0">Voucher : 
                                        <span class="widget-numeric-value">
                                            100
                                        </span>
                                    </p>                               
                                </div>
                            </div>
                        </div>
                    </div> 


                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        
                        <div class="widget-content-area  data-widgets br-4">
                            <div class="widget  t-income-widget">
                                <div class="media">
                                    <div class="icon ml-2">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <p class="widget-text mb-0"> Momo</p>
                                        <p class="widget-numeric-value">
                                        </p>
                                    </div>
                                </div>
                                <div class="media-body text-left">
                                    <p class="widget-text mb-0">Voucher : 
                                        <span class="widget-numeric-value">
                                            <?php
                                                $sql = "SELECT * FROM voucher WHERE status='sold' AND volid='$volid' AND mop='momo'";
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



                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            
                            <div class="widget-content-area  data-widgets br-4">
                                <div class="widget  t-income-widget">
                                    <div class="media">
                                        <div class="icon ml-2">
                                            <i class="flaticon-money"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <p class="widget-text mb-0"> By Cash</p>
                                            <p class="widget-numeric-value">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="media-body text-left">
                                        <p class="widget-text mb-0">Voucher : 
                                            <span class="widget-numeric-value">
                                                <?php
                                                    $sql = "SELECT * FROM voucher WHERE status='sold' AND volid='$volid' AND mop='cash'";
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







                </div> 
                
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
                                                <th>Action </th>
                                            </tr>
                                        </thead>
                                        <tbody id="gtv">
                                           
                                        </tbody>
                                    </table>
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
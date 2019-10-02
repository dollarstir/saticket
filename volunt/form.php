<?php
session_start();
if(!isset($_GET['oid']) || !isset($_SESSION['id'])) {
    echo "<script>window.location='home.php'</script>";
}else{

}


?>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Success Africa </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <style>
        .form-control {
            border: 1px solid #ccc;
            color: #888ea8;
            font-size: 15px;
        }
        code { color: #3862f5; }
        .form-control:disabled, .form-control[readonly] { background-color: #f1f3f9; border-color: #f1f3f1; }
        .btn-primary.disabled, .btn-primary:disabled { background-color: #3862f5; border-color: #3862f5; }
        label { color: #3b3f5c; margin-bottom: 14px; }
        .form-control::-webkit-input-placeholder { color: #888ea8; font-size: 15px; }
        .form-control::-ms-input-placeholder { color: #888ea8; font-size: 15px; }
        .form-control::-moz-placeholder { color: #888ea8; font-size: 15px; }
        .form-control:focus { border-color: #3862f5; }
        .input-group-text {
            background-color: #f3f4f7;
            border-color: #e9ecef;
            color: #6156ce;
        }
        input[type='number'] {
    -moz-appearance:textfield;
}
        select.form-control {
            display: inline-block;
            width: 100%;
            height: calc(2.25rem + 2px);
            vertical-align: middle;
            background: #fff url(assets/img/arrow-down.png) no-repeat right .75rem center;
            background-size: 13px 14px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        select.form-control::-ms-expand { display: none; }
    </style>
    <!--  BEGIN CUSTOM STYLE FILE  -->

</head>
<body>
    <style>
        body {
            margin: 0;
            border: 0;
            padding: 0;
        }
    </style>
    <div class="row mess_border disp" style="position: fixed;top: 50%;padding: 30px;transform: translate(0, -50%);width: 105%;padding: 0 10px;z-index: 100;background: #dee2d4;">
        <div  style="margin: auto;">
            <div class="statbox widget box box-shadow mess" style="text-align: center;">
                <h3 style="margin-top: 5px;"> </h3>
                <h4>  <b>  </b></h4>
                <input style="display: block;margin: auto;" type="submit" name="tim" class="mt-4 mb-4 btn btn-button-7 btn-rounded submit" value="OK"> 
            </div>
        </div>
    </div>

    <div id="eq-loader" style="display: none;">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>


    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->


        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content" style="margin-top: 20px;">
            <div class="container">

                <div class="row layout-spacing">

                    <div class="col-lg-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing"   style="margin: auto;">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                       <center> <h4>Voucher Confirmation form</h4></center>
                                    </div>                                                      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form class="subm">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlInput1">Name</label>
                                        <input name="name" type="text" class="form-control-rounded form-control" id="exampleFormControlInput1" placeholder="Please enter name">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlInput1">Phone Number</label>
                                        <input name="phone" type="number" class="form-control-rounded form-control" id="exampleFormControlInput1" placeholder=" Please enter phone number">
                                    </div>
                                    <style>
                                        .disp {
                                            display: none;
                                        }
                                    </style>
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Level</label>
                                        <select name="stlevel" class="form-control-rounded form-control" id="exampleFormControlSelect1">
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>
                                            <option value="500">500</option>
                                            <option value="600">600</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Type</label>
                                        <select name="type" class="form-control-rounded form-control" id="exampleFormControlSelect1">
                                            <option value="complimentary">Complimentary</option>
                                            <option value="20">GH&#8373; 20</option>
                                            <option value="10">GH&#8373; 10</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Gender</label>
                                        <select name="gender" class="form-control-rounded form-control " id="exampleFormControlSelect1">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Payment Method</label>
                                        <select name="method" class="form-control-rounded form-control sel" id="exampleFormControlSelect1">
                                            <option value="cash">Cash</option>
                                            <option value="momo">Mobile Money</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4 disp ref">
                                        <label for="exampleFormControlInput1">Transaction ID</label>
                                        <input name="momoID" type="text" class="form-control-rounded form-control" id="exampleFormControlInput1" placeholder="Mobile Money Transaction ID">
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $_GET['oid'];?>">
                                    <input type="submit" name="sub" class="mt-4 mb-4 btn btn-button-7 btn-rounded sub" value="Submit Data">
                                </form>
                            </div>
                        </div>
                    </div>

                    

                    

    <!--  END CONTROL SIDEBAR  -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
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
    <!-- END GLOBAL MANDATORY STYLES -->   

</body></html>
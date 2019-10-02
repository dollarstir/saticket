<!-- developed by frederick Ennnin

date: 19th April,2019.
 -->
<?php
session_start();
include "db.php";

include "core.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/users/login-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
</head>
<body class="login">
    <div id="eq-loader">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>
    <div style="background: lightgray;position: fixed;top: 10px;left: 50%;transform: translateX(-50%); padding: 10px; color: gray;font-size: bolder">
        <?php 
            include "db.php";
            if (isset($_POST['btnlog'])) {
                $email=$_POST['email'];
                $password=$_POST['password'];
                $login=$_POST['login'];
                login($email,$password,$login) ;
            }
        ?>
    </div>

    <form class="form-login" action="index.php" method="POST">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="assets/img/logo-5.png" class="theme-logo">
            </div>

            <div class="col-md-12">
                <label for="inputEmail" class="">Contact</label>                
                <input type="text" id="inputEmail" class="form-control mb-4" placeholder="Email" name="email" required >                
                <label for="inputPassword" class="">Password</label>                
                <input type="password" id="inputPassword" class="form-control mb-5" placeholder="Password" name="password" required>
                <label for="" class="">Account Type</label> 
                <select name="login" class="form-control-rounded form-control" id="exampleFormControlSelect1">
                                            <option value="">Please Select Account Type</option>
                                            <option value="admin">Admin</option>
                                            <option value="subadmin">Sub Admin</option>
                                            <option value="volunter">Volunter</option> 
                                        </select>
                           
                               
                <div class="checkbox d-flex justify-content-between mb-4 mt-3">
                    <div class="custom-control custom-checkbox mr-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" value="remember-me">
                        <label class="custom-control-label" for="customCheck1">Remember</label>
                    </div>
                    <div class="forgot-pass">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>                
                <button class="btn btn-lg btn-gradient-danger btn-block btn-rounded mb-4 mt-5" type="submit" name="btnlog">Login</button>
            </div>

            
        </div>
    </form>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>

</html>
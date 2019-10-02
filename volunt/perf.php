<?php

if(isset($_GET) || isset($_POST)) {
    include "db.php";
    if(isset($_POST['id'])) {
        $id = mysqli_real_escape_string($conn, $_POST['id']);

        $mess = "";
        $messN = "";
        $messP = "";
        $messM = "";
        $messMID = "";    
    
        if(empty($_POST['name'])) {
            $messN = "Please enter name of customer";
    
        }else{
            $name = mysqli_real_escape_string($conn, $_POST['name']);
        }
    
        if(empty($_POST['phone'])) {
            $messP = "Please enter phone number"; 
        }else{
            if(strlen($_POST['phone']) != 10) {
                $messP = "Invalid";
            }
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        }
    
        if(empty($_POST['method'])) {
            $messM = "Please enter method of payment"; 
        }else{
            $method = mysqli_real_escape_string($conn, $_POST['method']);
    
            if($method == "momo") {
                if(empty($_POST['momoID'])) {
                    $messMID = "Please input your reference number";
                }else{
                    $momoId = mysqli_real_escape_string($conn, $_POST['momoID']);
                }
            }else{
                $momoId = "";
            }
        }
    
        if(!empty($messN && $messP && $messM)) {

            echo "Please fill empty field";
            // if($messN != "") {
            //     echo $messN.'<br>';
            // }
            // if($messM != "") {
            //     echo $messM.'<br>';
            // }
            // if($messMID != "") {
            //     echo $messMID.'<br>';
            // }
        }elseif($messP == "Invalid"){ 
                echo "Invalid phone number";
            
        }elseif($_POST['method'] == "momo" && empty($_POST['momoID'])) {
            if($messMID != "") {
                echo $messMID.'<br>';
            }
        }else{
            if(empty($_POST['gender'])) {
                echo "Please select gender";

            }else {
                $gender = $_POST['gender'];
                $lev = mysqli_real_escape_string($conn, $_POST['stlevel']);
                $type = mysqli_real_escape_string($conn, $_POST['type']);

                $sqlr = "SELECT * FROM voucher WHERE id=$id AND status='sold'";
                $queryr = mysqli_query($conn, $sqlr);
                $resultsr = mysqli_fetch_array($queryr);
    
                if($resultsr == 0) {
    
                    $sql = "SELECT * FROM voucher WHERE id=$id";
                    $query = mysqli_query($conn, $sql);
                    $results = mysqli_fetch_array($query);
            
                    if($results > 0) {
                        session_start();
                        $volPerson = $_SESSION['name'];
                        $volid= $_SESSION['id'];
                        $loc = $_SESSION['loc'];
                        $vouch = $results['voucher'];
                        $dateSold = date("d/m/Y");
                        $sql = "UPDATE voucher SET gender ='$gender', status='sold', datesold='$dateSold', soldby='$volPerson', soldto='$name', 
                                stcont='$phone', stlevel='$stlevel', type='$type', mop='$method', momoRef='$momoId', volid='$volid' WHERE id=$id";
        
                        $sql2 = "INSERT INTO orders(inv, name, level, contact, datesold, venue, do, status) VALUES 
                                ('$vouch', '$name', '$lev', '$phone', '$dateSold', '$loc', '$volPerson', 'Delivered')";  
        
        
                        if(mysqli_query($conn, $sql)) {
        
                            echo "success/".$results['voucher'];
                        }else{
                            echo "Failed to sell, Please try again";
                        }
            
                    }else{
                        echo "Error occured!";
                    }
                    
                }else{
                    echo "Voucher already used";
                }
            }
           
        }
    }elseif(isset($_GET['func'])) {
        if($_GET['func'] == "login") {

            if(empty($_POST['email'])) {

            }elseif(empty($_POST['password'])) {
    
            }else{
                $email=$_POST['email'];
                $password=$_POST['password'];
    
                $log=mysqli_query($conn,"SELECT * FROM volunter WHERE username='$email' AND password='$password'");
    
                if ($row=mysqli_fetch_array($log)) {
                    session_start();
                    $_SESSION['id']=$row['id'];
                    $_SESSION['name']=$row['name'];
                    $_SESSION['username']=$row['username'];
                    $_SESSION['loc']=$row['location'];
               
                    echo '<script>window.location="home.php"</script>';
                }else{
                    echo "please enter correct details";
                }
            }

        }   
    }
}




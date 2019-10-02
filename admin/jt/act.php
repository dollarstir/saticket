<?php

if(isset($_POST) || isset($_GET)) {

    if(isset($_GET['add'])) { 
        include '../db.php';  
        $date = date("d/m/Y");

        $response = array();
        $response['status'] = '';
        $errors = array();
        $error_1 = 'Please fill this field';

        foreach ($_POST as $key => $value) {
            $errors[$key] = "";

            if(empty($value)) {
                if($response['status'] = 'error') {

                }else{
                    $response['status'] = 'error';

                }
                $errors[$key] = $error_1;

            }
        }

        if(!empty($_POST['contact'])) {
            $contact = $_POST['contact'];
            $contactLen = strlen($contact);

            if($contactLen < 10) {
                $response['status'] = 'error';
                $errors['contact'] = 'Phone number is less than 10... 10 digits required';

            } elseif ($contactLen > 10) {
                $response['status'] = 'error';
                $errors['contact'] = 'Phone number is greater than 10... 10 digits required';
              
            } else {
                $errors['contact'] = "";

            }
        }

        if(!empty($_POST['stuid'])) {
            $stuid = $_POST['stuid'];

            if(strlen($stuid) == 14) {
                $errors['stuid'] = "";

            } else {
                $response['status'] = 'error';
                $errors['stuid'] = "Invalid Student ID";

            }
        }

        foreach ($errors as $key => $value) {
            if($value != "") {
                $response['status'] = 'error';
            }
        }

        if($response['status'] != 'error') {
            $action = $_GET['add'];

            $stuid = $_POST['stuid'];
            $sql_c = "SELECT * FROM $action WHERE stuid = '$stuid' ";
            $query_c = mysqli_query($conn, $sql_c);
            $result_c = mysqli_fetch_array($query_c);

            if($result_c > 0) {
                $response['status'] = 'error';
                $errors['stuid'] = "A $action already exist with this Student ID";
                $response['statusGen'] = "A $action already exist";

            } else {
                $username = 'sa19'.$contact;
                $password = 'sap'.rand(1111, 9999);
                $name = $_POST['name'];
                $hall = $_POST['hall'];
                $rno = $_POST['rno'];
                $loc = $_POST['location'];
                $team = $_POST['team'];

                $sql = "INSERT INTO $action (name, username, contact, stuid, hall, rno, location, dateadded, password, team) 
                    VALUES ('$name', '$username', '$contact', '$stuid', '$hall', '$rno', '$loc', '$date', '$password', '$team')";
            
                if(mysqli_query($conn, $sql)) {
                    $response['status'] = 'success';
                    $response['statusGen'] = "$action was added successfully!";

                } else {
                    $response['status'] = 'error';
                    $response['statusGen'] = "$action was not added successfully!";
                }
            }
        }


        $response['response'] = $errors;
        echo json_encode($response);
    }
}

function getVol($action, $conn) {
    $sql = "SELECT * FROM $action";
    $query = mysqli_query($conn, $sql);
    
    
    while($results = mysqli_fetch_array($query)) {
        echo '<tr>';
        echo '
            <td>'.$results["id"].'</td>
            <td>'.$results["name"].'</td>
            <td>'.$results["contact"].'</td>
            <td>'.$results["stuid"].'</td>
            <td>'.$results["location"].'</td>
            <td>'.$results["hall"].'</td>
            <td>'.$results["rno"].'</td>
            <td>'.$results["team"].'</td>
            <td>'.$results["dateadded"].'</td>
            <td>'.$results["status"].'</td> 
        ';
        echo '</tr>';
    }
}

function getVouch($action, $conn) {
    if($action == 'all') {
        $sql = "SELECT * FROM voucher"; 
        
    } else {
        $sql = "SELECT * FROM voucher WHERE location = '$action'";

    }  
    $query = mysqli_query($conn, $sql);

    while($results = mysqli_fetch_array($query)) {
        echo '<tr>';
        foreach ($results as $key => $value) {
            if(!is_int($key)) {
                if($key == 'id' || $key  == 'location' || $key == 'status') {
                    echo '<td>'.$value.'</td>';
                }
            } 
        }
        echo '</tr>';
    }

}
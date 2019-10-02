<?php

function getVol($action, $action2, $conn) {
    $sql = "SELECT * FROM volunter WHERE location = '$action' AND team = '$action2'";

    $query = mysqli_query($conn, $sql);

    while($results = mysqli_fetch_array($query)) {
        echo '<tr>';
        foreach ($results as $key => $value) {
            if(!is_int($key)) {
                if($key == 'name' || $key  == 'location' || $key == 'status') {
                    echo '<td>'.$value.'</td>';
                }
            } 
        }
        $v_id = $results['id'];
        $sql_r = "SELECT voucher FROM voucher WHERE volid = '$v_id'";
        $query_r = mysqli_query($conn, $sql_r);
        $res = mysqli_num_rows($query_r);
        echo "<td>$res</td>";
        echo '</tr>';
    }

}


function getVouch($action, $conn) {
    $sql = "SELECT * FROM voucher WHERE location = '$action'";

    $query = mysqli_query($conn, $sql);

    while($results = mysqli_fetch_array($query)) {
        echo '<tr>';
        foreach ($results as $key => $value) {
            if(!is_int($key)) {
                if($key == 'voucher') {
                    echo '<td>Voucher</td>';
                }
                if($key == 'status') {
                    echo '<td>'.$value.'</td>';
                }           
                if($key == 'soldby') {
                    if($value == '') {
                        echo '<td>None</td>';
                    } else {
                        echo '<td>'.$value.'</td>';
                    }
                }
                if($key == 'soldto') {
                    if($value == '') {
                        echo '<td>None</td>';
                    } else {
                        echo '<td>'.$value.'</td>';
                    }
                }
            } 
        }
    }

}
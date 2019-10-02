<?php
session_start();
$loc =$_SESSION['loc'];
include "db.php";

$geto=mysqli_query($conn,"SELECT * FROM voucher WHERE status='Available' AND location='$loc'");

while ($rgo=mysqli_fetch_array($geto)) 
{
   $id= $rgo['id'];
  echo' <tr>                                  
            <td>Available Voucher</td>
            <td>
                
                <a href="form.php?oid='.$id.'" class="btn btn-success mb-4 mr-2 sell">
                    Sell
                </a>     
            </td>
        </tr>';
}

?>
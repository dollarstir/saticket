<?php
include "db.php";
$id= $_GET['oid'];
$dl=mysqli_query($conn,"UPDATE voucher SET  attendStatus2='Attended' WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="lg.php"</script>';
} 
else 
{

    echo '<script>  window.location="lg.php"</script>';
}






?>
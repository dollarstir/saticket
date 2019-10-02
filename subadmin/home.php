
<?php 
session_start();
include "db.php";
include "core.php";


if($_SESSION['loc'] == 'ucc') {
    echo ' <script>window.location="home3.php";</script>
    ';

}elseif ($_SESSION['loc'] == 'legon') {
    echo ' <script>window.location="home1.php";</script>
    ';

}elseif ($_SESSION['loc'] == 'knust') {
    echo ' <script>window.location="home2.php";</script>
    ';

}elseif ($_SESSION['loc'] == 'hotech') {
    echo ' <script>window.location="home4.php";</script>
    ';
}else{
    echo 'unknown location';
}

?>


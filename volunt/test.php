<?php

$conn = mysqli_connect("192.168.25.206", "purple", "purple", "testme");

$sql = "SELECT * FROM try ";
$query = mysqli_query($conn, $sql);

while($row=mysqli_fetch_array($query)) {
    echo $row['name'];
}


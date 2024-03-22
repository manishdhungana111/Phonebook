<?php
require "./connect.php";
$data1 = $_POST['first_name'];
$data2 = $_POST['middle_name'];
$data3 = $_POST['last_name'];
$data4 = $_POST['number'];

$sql="UPDATE contacts SET first_name = '$data1',middle_name='$data2',last_name='$data3',phone_number='$data4' WHERE phone_number = '$data4'";
mysqli_query($conn,$sql);
header("Location:index.php");
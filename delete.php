<?php
require "./connect.php";
$data1 = $_POST['first_name'];
$data2 = $_POST['middle_name'];
$data3 = $_POST['last_name'];
$data4 = $_POST['number'];

$sql="DELETE from contacts where phone_number='$number'";
mysqli_query($conn,$sql);
header("Location:index.php");
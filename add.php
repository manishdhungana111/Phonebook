<?php
require "./connect.php";
$data1 = $_POST['first_name'];
$data2 = $_POST['middle_name'];
$data3 = $_POST['last_name'];
$data4 = $_POST['number'];

$sql="Insert into contacts (first_name,middle_name,last_name,phone_number) values ('$data1','$data2','$data3','$data4')";
mysqli_query($conn,$sql);
header("Location: index.php");
?>
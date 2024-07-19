<?php

$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","employe");
$sql = "INSERT INTO emp(emp_name,emp_address,emp_depart,emp_contact)
VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";

$result = mysqli_query($conn, $sql) or die ("Failed");

header("Location: http://localhost:82/session/home.php");
mysqli_close($conn);
?>
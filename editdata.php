<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_phone = $_POST['sphone'];
$stu_class = $_POST['sclass'];

$conn = mysqli_connect("localhost","root","","crudd");

$sql = "UPDATE employee SET emp_name = '{$stu_name}', emp_address = '{$stu_address}', emp_contact = '{$stu_phone}', emp_dept = '{$stu_class}' WHERE emp_id = {$stu_id}";

$result = mysqli_query($conn, $sql) or die("FAILED");

header("Location: http://localhost:82/crudphp/home.php");

mysqli_close($conn);
?>
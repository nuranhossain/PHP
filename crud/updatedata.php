<?php 
 
 $stid = $_POST['sid'];
 $stname = $_POST['sname'];
 $staddress = $_POST['saddress'];
 $stclass = $_POST['sclass'];
 $stphone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud");

$sql = "UPDATE student SET sname ='{$stname}',saddress ='{$staddress}',sclass ='{$stclass}',sphone ='{$stphone}' where sid = '{$stid}'";

$result = mysqli_query($conn, $sql);

	header("location: http://localhost/crud/index.php");

	mysqli_close($conn);
 ?>



 ?>
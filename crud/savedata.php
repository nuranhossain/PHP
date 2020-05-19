<?php 
 $stname = $_POST['sname'];
 $staddress = $_POST['saddress'];
 $stclass = $_POST['class'];
 $stphone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud");

if(){

}

function validate(){
	
}
$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES('{$stname}','{$staddress}','{$stclass}','{$stphone}')";

$result = mysqli_query($conn, $sql);

	header("location: http://localhost/crud/index.php");

	mysqli_close($conn);
 ?>
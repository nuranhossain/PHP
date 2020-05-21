<?php 

$stid = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student where sid = {$stid}" ;

$result = mysqli_query($conn, $sql) or die("Query Is Failed");

header("Location: http://localhost/crud/index.php");

mysqli_close($conn);
 ?>
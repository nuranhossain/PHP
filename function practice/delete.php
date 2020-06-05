<?php
$id = $_GET['id'];


$conn = mysqli_connect("localhost", "root", "", "practice");
$sql = "DELETE FROM info where id = '{$id}'";
$result = mysqli_query($conn, $sql);

header("location: data.php");

mysqli_close($conn);


?>
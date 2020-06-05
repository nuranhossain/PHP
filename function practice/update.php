<?php
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];

if (empty($name)) {
	echo "<h2>Can not be empty Name Field</h2>";
	echo "<a href='data.php'>Back To Data</a>";
} else if (empty($phone)) {
	echo "Can not be empty Phone Field";
} else {

	$conn = mysqli_connect("localhost", "root", "", "practice");
	$sql = "UPDATE info SET name ='{$name}',phone ='{$phone}' where id = '{$id}'";
	$result = mysqli_query($conn, $sql);

	header("location: data.php");

	mysqli_close($conn);

}


?>
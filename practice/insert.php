<?php

if (isset($_POST['insert'])) {

	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

	// $username = $_POST['name'];
	// $phone    = $_POST['phone'];

	if (empty($name)) {
		echo "<div class='error'>Name Field can not be empty</div>";

	} else if (empty($phone)) {
		echo "<div class='error'>Phone Field can not be empty</div>";

	} else {

		$connection = mysqli_connect("localhost", "root", "", "practice");
		$insertData = "INSERT INTO info (name, phone) VALUES('{$name}','{$phone}')";
		$result = mysqli_query($connection, $insertData);

		if ($result) {
			header("Location: index.php");
		} else {
			echo "Something is wrong";
		}
	}
}


?>
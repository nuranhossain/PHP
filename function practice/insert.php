<?php
include_once "function.php";

if (isset($_POST['insert']) && !empty($_REQUEST['insert'])) {
	insertData();
}

?>


<?php include "insert.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
</head>

<body>
<h2 text align="center">Fill Up The Form Please</h2> <br>
<?php
	$error = isset($_GET['error']) ? isset($_GET['error']) : '';
	if(!empty($error)){
		echo "<h4 style='color:red; font-weight: 600; text-align:center;'> Please Insert Validate Data </h4>";
	}
?>
<form action="insert.php" method="post">
	<fieldset>
		<div class="row">
			<div class="column column-50 column-offset-25">
				<label>Name</label>
				<input type="text" placeholder="Your Name" name="name">
			</div>
		</div>
		<div class="row">
			<div class="column column-50 column-offset-25">
				<label>Phone</label>
				<input type="text" placeholder="Your Phone" name="phone">
			</div>
		</div>

		<div class="row">
			<div class="column column-50 column-offset-25">
				<input class="button-primary" type="submit" name="insert" value="insert">
				<a class="button" href='data.php'>DATA</a>
			</div>
		</div>
	</fieldset>
</form>

</body>
</html>
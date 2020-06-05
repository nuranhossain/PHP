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

<div id="main-content">
	<div class="container">
		<div class="row">
			<div class="column column-80 column-offset-10">
				<h2 text align="center">Fill Up The Form Please</h2> <br>
				<?php

				$connection = mysqli_connect("localhost", "root", "", "practice");
				$id = $_GET['id'];
				$sql = "SELECT * FROM info where id = {$id}";
				$result = mysqli_query($connection, $sql);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						?>

						<form action="update.php" method="post">
							<fieldset>
								<div class="row">
									<div class="column column-50 column-offset-25">
										<label>Name</label>
										<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
										<input type="text" placeholder="Your Name" name="name"
										       value="<?php echo $row['name']; ?>">
									</div>
								</div>
								<div class="row">
									<div class="column column-50 column-offset-25">
										<label>Phone</label>
										<input type="text" placeholder="Your Phone" name="phone"
										       value="<?php echo $row['phone']; ?>">
									</div>
								</div>

								<div class="row">
									<div class="column column-50 column-offset-25">
										<input class="submit" type="submit" name="update" value="Update"/>
									</div>
								</div>
							</fieldset>
						</form>
						<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</div>

</body>

</html>

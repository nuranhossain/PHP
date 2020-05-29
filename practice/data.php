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
				<h2>All Records</h2>

				<?php

				$conn = mysqli_connect("localhost", "root", "", "practice") or die("Connection is not succesful");
				$sql = "SELECT * FROM info";

				$result = mysqli_query($conn, $sql) or die("Query Is Failed");
				if (mysqli_num_rows($result) > 0) {

					?>

					<table cellpadding="7px">
						<thead>
						<th>Id</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Action</th>
						</thead>
						<tbody>
						<?php while ($row = mysqli_fetch_assoc($result)) {

							?>
							<tr>
								<td><?php echo($row['id']); ?></td>
								<td><?php echo($row['name']); ?></td>
								<td><?php echo($row['phone']); ?></td>
								<td>
									<a class="button" href='edit.php?id=<?php echo $row["id"]; ?>'>Edit</a>
									<a class="button" href='delete.php?id=<?php echo $row["id"]; ?>'>Delete</a>

								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
				<?php } else {
					echo "<h2>No Record</h2>";
				}
				mysqli_close($conn);
				?>
			</div>
		</div>
	</div>
</div>

</body>

</html>

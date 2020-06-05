<?php include_once "function.php" ?>
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
					$info = isset($_GET['added']) ? isset($_GET['added']) : '';

					if(!empty($info)){
						echo "<h4 style='color:green; font-weight: 600; text-align:center;'> Data Added Successfully </h4>";
					}

				?>
                <?php dataDisplay(); ?>
			</div>
		</div>
	</div>
</div>

</body>

</html>

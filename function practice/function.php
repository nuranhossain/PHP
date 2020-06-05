<?php

define("DB_HOST", 'localhost');
define("DB_USER", 'root');
define("DB_PASSWORD", '');
define("DB_NAME", 'practice');

function validation($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function dataDisplay(){

	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	if(!$connection){
		throw new Exception("Cannot Connect to Database");
	}else{
		$query = "SELECT * FROM info";
		$result = mysqli_query($connection,$query);

		if(mysqli_num_rows($result) == 0){
			return false;
		}
		?>
		<table cellpadding="7px">
			<thead>
				<th>Id</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php while ( $data = mysqli_fetch_assoc($result)): ?>
				<tr>
					<td><?php echo($data['id']); ?></td>
					<td><?php echo($data['name']); ?></td>
					<td><?php echo($data['phone']); ?></td>
					<td>
						<a class="button" href='edit.php?id=<?php echo $data["id"]; ?>'>Edit</a>
						<a class="button" href='delete.php?id=<?php echo $data["id"]; ?>'>Delete</a>

					</td>
				</tr>
			<?php endwhile; mysqli_close($connection); ?>
			</tbody>
		</table>
		<?php
	}
}

function insertData(){
	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	if(!$connection){
		throw new Exception("Cannot Connect to Database");
	}else{
		$action = isset($_POST['insert']) ? isset($_POST['insert']) : '';
		if (!$action) {
		    header("Location: data.php");
		    die();
		}else{
	        $name  = validation($_POST['name']);
	        $phone = validation($_POST['phone']);

	        $name  = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	        $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	        if ($name && $phone) {
	            $query = "INSERT INTO info (name,phone) VALUES('{$name}', '{$phone}')";
	            mysqli_query($connection, $query);
	            header("Location: data.php?added=true");
	        }else{
	        	header("Location: index.php?error=0");
	        }
		}
	}
}

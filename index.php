<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My First Ubuntu Server PHP Deployment</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<p> Ubuntu Server PHP Deployment - Princess Nina Puzon</p>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Collect and sanitize form inputs
		$firstname = htmlspecialchars($_POST['firstname']);
		$middlename = htmlspecialchars($_POST['middlename']);
		$lastname = htmlspecialchars($_POST['lastname']);
		$age = htmlspecialchars($_POST['age']);
		$address = htmlspecialchars($_POST['address']);
		$course = htmlspecialchars($_POST['course']);

		// Here you would include the database connection file
		include 'conn.php';

		// Insert into database
		$sql = "INSERT INTO users (firstname, middlename, lastname, age, address, course)
				VALUES ('$firstname', '$middlename', '$lastname', '$age', '$address', '$course')";

		if ($conn->query($sql) === TRUE) {
			echo "<div class='alert alert-success'>Record added successfully</div>";
		} else {
			echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
		}
	}
	?>

	<form method="POST" action="">
		<div>
			<label>First Name:</label>
			<input type="text" name="firstname" class="form-control" required>
		</div>

		<div>
			<label>Middle Name:</label>
			<input type="text" name="middlename" class="form-control" required>
		</div>

		<div>
			<label>Last Name:</label>
			<input type="text" name="lastname" class="form-control" required>
		</div>

		<div>
			<label>Age:</label>
			<input type="number" name="age" class="form-control" required>
		</div>

		<div>
			<label>Address:</label>
			<input type="text" name="address" class="form-control" required>
		</div>

		<div>
			<label>Course & Section:</label>
			<input type="text" name="course" class="form-control" required>
		</div>

		<div>
			<button type="submit" class="btn btn-primary mt-3">Submit</button>
		</div>
	</form>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>

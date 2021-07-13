<?php
//  Procedural Orinted Programming Language
$insert = false;
if(isset($_POST['name'])) {
	$server = "localhost";
	$username = "root";
	$password = "";

	
	$conn = mysqli_connect($server, $username, $password);

	if(!$conn){
		die("Connection to this database failed due to".mysqli_connect_error());
	}
		// echo "Success connecting to the db";	
		
		$name = $_POST['name'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$programme = $_POST['programme'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$desc = $_POST['desc'];

		
		$sql = "INSERT INTO `pokharatrip`.`trip` (`name`, `age`, `gender`, `programme`,
		`email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$programme', '$email', '$phone', '$desc', current_timestamp());";

		// echo $sql;

		if($conn->query($sql) == true){
			$insert  = true;
			// echo "Successfully inserted!";
		}
		else{
			echo "ERROR: $sql <br> $conn->error";
		}
		$conn->close();
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to Travel Form</title>


	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Baumans&family=Qahiri&display=swap" rel="stylesheet">

</head>

<script src="index.js"></script>

<body>
	<img class="pu" src="boat.jpg" alt="Pokhara">
	<div class="container">
		<h3 >Welcome to NCIT Pokhara Trip form</h3>
		<p class = "welcome">Enter your details and submit this form to confirm your participation in the trip</p>

		<?php
		if($insert == true)  {
			echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining for the Pokhara trip.</p>";
		}
	    ?>

		<form action="index.php" method="post">
			<input type="text" name="name" id="name" placeholder="Enter your name: ">
			<input type="text" name="age" id="age" placeholder="Enter your age: ">
			<input type="text" name="gender" id="gender" placeholder="Enter your gender: ">
			<input type="text" name="programme" id="programme" placeholder="Enter your programme: ">
			<input type="email" name="email" id="email" placeholder="Enter your email: ">
			<input type="text" name="phone" id="phone" placeholder="Enter your phone: ">

			<textarea name="desc" id="desc" cols="30" rows="10"
				placeholder="Enter any other information here:"></textarea>
			<button class="btn btn-sm">Submit</button>
		</form>
	</div>
	
</body>

</html>
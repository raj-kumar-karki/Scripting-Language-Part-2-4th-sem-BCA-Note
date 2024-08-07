<?php
		include "config.php";

		if(isset($_POST['submit'])) 
		{
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$gender = $_POST['gender'];
		}

		$sql = " INSERT INTO 'users' (firstname, lastname, email, password, gender) VALUES ('$firstname', '$lastname', '$email', '$password', '$gender')"

		$query = mysqli_query($conn, $sql);

		if($result == TRUE) {
			echo "New record is created sucessfully";
		}
		else {
			echo "error:" . $query . "<br>" .$conn->error;
		}

		$conn->close();


?>

<!DOCTYPE html>
<html>
<body>

	<h2> Signup  Form </h2>

	<form action="" method="POST">
		<fieldset>
			<legend> Personal Information</legend>
			First Name: <br>
			<input type = "text" name = "firstname">
			<br>
			Last Name: <br>
			<input type = "text" name = "lastname">
			 Password : <br>
			<input type = "text" name = "password">
			<br>
			Gender: <br>
			<input type = "radio" name = "gender" value = "Male"> Male
			<input type = "radio" name = "gender" value = "Female"> Female

			<br> <br>
			<input type = "submit" name = "submit" value = "submit">
		</fieldset>
	</form>
</body>
</html>











    ?>






















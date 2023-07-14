<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		    $uname = $_POST['uname'];
			$pass = $_POST['pass'];
			$mail = $_POST['email'];
			$phone = $_POST['phno'];

			$hostname = 'localhost';
			$username = 'root';
			$password = '';
			$database = 'akhila';

		$conn = new mysqli($hostname, $username, $password, $database);
		if ($conn->connect_error) {
			die('Connection failed: ' . $conn->connect_error);
		}
		$sql = "INSERT INTO registration VALUES ('$uname','$pass','$mail','$phone')";
		
		//$sql = INSERT INTO registration VALUES (uname,pass,mail,phone);
		//$sql = "INSERT INTO registration ($uname,$pass,$mail,$phone) VALUES ('Mohana','89','chereddymohana@gmail.com','9866251768')";
		if ($conn->query($sql) === TRUE) {
			echo '<h2>Welcome dear '.$uname.'!!<br></h2>';
			echo '<h3><b><i><a href="main.html">Go To Home Page</a></i></b></h3>';
		} else {
			echo "Error inserting data: " . $conn->error . "<br>";
		}
	
		$conn->close();
	}
?>

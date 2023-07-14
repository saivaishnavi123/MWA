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

		$sql = "UPDATE registration SET `$columnname` = '$newvalue' WHERE `$conditioncolumn` = '$uname'";

		if ($conn->query($sql) === TRUE) {
			echo "Table updated successfully<br>";
		} else {
			echo "Error updating table: " . $conn->error . "<br>";
		}

		$conn->close();
	}
?>

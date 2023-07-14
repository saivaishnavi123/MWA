<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$conditioncolumn = $_POST['con'];
		$conditionvalue = $_POST['value'];
		$hostname = 'localhost';
		$username = 'root';
		$password = '';
		$database = 'akhila';
		$conn = new mysqli($hostname, $username, $password, $database);
		if ($conn->connect_error) {
			die('Connection failed: ' . $conn->connect_error);
		}

		$sql = "SELECT * FROM registration";
		if (!empty($conditioncolumn) && !empty($conditionvalue)) {
				$sql .= " WHERE `$conditioncolumn` = '$conditionvalue'";
		}
		$result = $conn->query($sql);

		if ($result && $result->num_rows> 0) {
			echo "<table border='1'>";
			echo "<tr><th>Name</th><th>Email ID</th><th>Phone Number</th></tr>";
			while ($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["uname"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["phno"] . "</td>";
				echo "</tr>";
			}
			echo "</table>";
		} else {
			echo "No records found<br>";
		}
		$conn->close();
	}
?>

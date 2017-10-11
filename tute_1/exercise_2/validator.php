<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "server-side-tute";

	
	$department = $_POST['dept'];
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "select * from employee where department=\"".$department."\"";
	
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo  $row["Name"]. "\t" . $row["Department"]. "\t" . $row["Salary"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	
	$conn->close();
	

?>
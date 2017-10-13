<?php

	class Employee{

		private $name;
		private $department;
		private $salary;
	
		function getName() { 
			return $this->name; 
		}
		
		function getDepartment() { 
			return $this->department; 
		}
		
		function getSalary() { 
			return $this->salary; 
		}
		function setName($var) { 
			$this->name  = $var; 
		}
		function setDepartment($var) { 
			$this->department = $var; 
		}
		function setSalary($var) { 
			$this->salary = $var; 
		}

	}

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
			$emp = new Employee;
			$emp->setName($row["Name"]);
			$emp->setDepartment($row["Department"]);
			$emp->setSalary($row["Salary"]);
			echo  $emp->getName(). "\t" . $emp->getDepartment(). "\t" . $emp->getSalary(). "<br>";
		}
	} else {
		echo "0 results";
	}
	
	$conn->close();
	

?>
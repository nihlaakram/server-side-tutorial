<?php
	$address = $_POST["add"];

	$address_format  = explode(",", $address);
	
	$size = sizeof($address_format);
	
	for($i=0; $i<$size; $i++){
		echo $address_format[$i]. "<br/>";
		
	}
?>
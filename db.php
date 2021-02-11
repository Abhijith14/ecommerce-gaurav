<?php
	$conn = mysqli_connect("localhost", "root", "", "aswindb");
	if(mysqli_connect_errno()) {
		echo "Connection failed:".mysqli_connect_error();
		exit;
	}

?>
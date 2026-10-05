<?php
	// Database configuration
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbNames = ['jhatpat-foods', 'foodie-moodie', 'food'];

	$conn = false;
	foreach ($dbNames as $dbName) {
		$conn = @mysqli_connect($host, $user, $pass, $dbName);
		if ($conn) {
			break;
		}
	}

	if ($conn === false) {
		error_log('Database connection failed: ' . mysqli_connect_error());
		die('Database connection failed. Please create one of these databases: jhatpat-foods, foodie-moodie, or food.');
	}

	mysqli_set_charset($conn, 'utf8mb4');
?>

<?php

	$dsn = "mysql:host=localhost;dbname=kutytech";

	try {

		$conn = new PDO($dsn, 'root', '');
		
	} catch (PDOException $e) {

		echo $e->getMessage();
		
	}

?>
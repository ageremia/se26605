<?php

	$dsn = "mysql:host=localhost;dbname=phpclassspring2018";
	$userName = "root";
	$pWord = "";
	
		try {
			$db = new PDO($dsn, $userName, $pWord);
		
		    } catch (PDOException $e)
			{
				die("Cannot connect to the database");
			}



?>
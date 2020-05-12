<?php
//general code to manage a current session, initialize the database connection and calculate information needed for the breadcrumbs
	//session_start();
	// Local connections
	// $host = 'localhost';
	// $dbname = 'project_db';
	// $username = 'root';
	// $password = '';

//   Online connections
	$host = 'remotemysql.com';
	$dbname = 'gvcR0vlnAu';
	$username = 'gvcR0vlnAu';
	$password = 'nrWQaKAPhN';

	try
	{
		$conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

	}
	catch (PDOException $pe)
	{
	die("Could not connect to the database $dbname :" .$pe->getMessage());
	}

	// echo "Connected to $dbname at $host successfully.";
	//$conn = null;

    
    
    ?>
<?php

	// start php session
	session_start();

	// set the default time to avoid stupid error on local machine - I should probably figure out how to change the setting on my Apache server
	date_default_timezone_set('Europe/London');

	//if it matches the live environment then set variables to server paths	
	if($_SERVER['SERVER_NAME']==="treedatav1.pdhtechnology.com")
		{
			// set server access variables 
			$hostname = "db5020087546.hosting-data.io"; 
			$username = "dbu670735"; 
			$password = "ionCcyh68@c3145327os"; 
			$databaseName = "dbs15480047";
		}
	//detect the server name - if it matches the local testing environment then set variables to local paths
	elseif($_SERVER['SERVER_NAME']==="treedatav1.test")
		{
			// set server access variables 
			$hostname = "localhost"; 
			$username = "root"; 
			$password = ""; 
			$databaseName = "treedata";
		}

	// create a variable that stores the mysql_connection details, and connects to the database
	$connection = mysqli_connect($hostname, $username, $password, $databaseName) or die ("Unable to connect.".mysqli_connect_error());

?>
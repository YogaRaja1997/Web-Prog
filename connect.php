<?php

	$servername = "localhost" ;
	$username   = "root" ;
	$password   = "" ;
	$db ="form";
	$con = new mysqli($servername, $username, $password,$db);
	

	if ($con -> connect_error)
	{
		die ("Connection failed : ". $con -> connect_error);
	}
	
	echo "Connected sucessfully <br>";
	
?>
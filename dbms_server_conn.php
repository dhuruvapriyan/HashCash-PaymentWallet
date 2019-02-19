<?php
$username="hashcash";
$servername='mydatabaseinstance.c7wkzjt3e2b4.us-west-2.rds.amazonaws.com';
$password="hashcash";
$con= new mysqli($servername, $username, $password);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
echo "Connected successfully";
if(mysqli_select_db($con,"hashcash"))
{
	echo"<br>	database has been selected";
	
}	
else
{
	echo"<br>failed to connect to database";
}


?>
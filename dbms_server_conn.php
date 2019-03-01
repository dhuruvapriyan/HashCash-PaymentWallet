<?php
$username="root";
$servername='localhost';
$password="";
$con= new mysqli($servername, $username, $password);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
#echo "Connected successfully";
if(mysqli_select_db($con,"hashcash"))
{
	#echo"<br>	database has been selected";
	
}	
else
{
	#echo"<br>failed to connect to database";
}


?>
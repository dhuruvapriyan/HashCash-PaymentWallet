<?php
session_start();
include 'dbms_server_conn.php';
$m_no=$_SESSION['user'];
$old=$_GET["old"];
$new=$_GET["new"];
$cnfnew=$_GET["cnfnew"];

$querry= "UPDATE hashcash.user SET password=$new where mobilenumber=$m_no AND password=$old";
$result = mysqli_query($con,$querry);

if(!$result)
{
	echo mysqli_error($result);
   
}
else
{
	echo "Password Updated";
	
 }
mysqli_close($con);





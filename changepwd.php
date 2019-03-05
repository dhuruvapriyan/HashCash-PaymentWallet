<?php
session_start();
include 'dbms_server_conn.php';
$m_no=$_SESSION['user'];
$old=$_GET["old"];
$new=$_GET["new"];
$cnfnew=$_GET["cnfnew"];

$querry= "SELECT  * from hashcash.user where mobilenumber=$m_no AND password=$old";
$result = mysqli_query($con,$querry);
if(!$result)
{
	echo mysqli_error($result);
	mysqli_close($con);
}
else
{
	if($new!=$cnfnew){
		echo '<script language="javascript">';
		echo 'alert("Password mismatch")';
		echo '</script>';
		mysqli_close($con);
	}
	$querry2= "UPDATE hashcash.user SET password=$new where mobilenumber=$m_no AND password=$old";
	$result2 = mysqli_query($con,$querry2);
	if(!$result2)
{
	echo mysqli_error($result2);
	mysqli_close($con);
}
else
{echo "Password Updated";}
	
 }


mysqli_close($con);





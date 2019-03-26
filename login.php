<?php
session_start();
include 'dbms_server_conn.php';
$m_no=$_GET["mobilenumber"];
$pwd=$_GET["password"];
$querry= "SELECT mobilenumber,password FROM user WHERE mobilenumber='$m_no' AND password='$pwd'";
$result = mysqli_query($con,$querry);

if(!$result)
{
	
		 header("location:index.php");
		 echo "authentication failed";
   
}
else
{
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($m_no==$row["mobilenumber"] && $pwd==$row["password"])
	{

		$_SESSION["user"]=$row["mobilenumber"];
		echo $_SESSION["user"];
		echo"<br>	ok";
		header("location:index-1.php");
	}
	else
	{	
		 header("location:index.php");
		 echo "authentication failed";
	} 
 }
mysqli_close($con);








?>

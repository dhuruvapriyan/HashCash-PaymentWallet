<?php
session_start();
include 'dbms_server_conn.php';
$nme=$_GET["name"];
$m_no=$_GET["mobilenumber"];

$querry= "INSERT INTO user (mobilenumber,name,password,loyaltypoints,balance) VALUES ('$m_no','$nme','$m_no',0,0)";
$result = mysqli_query($con,$querry);

if(!$result)
{
	echo mysqli_error($result);
   
}
else
{
	echo $result;
	
    header("location:index.php");
 }
mysqli_close($con);








?>
<?php
session_start();
include 'dbms_server_conn.php';
$nme=$_GET["name"];
$m_no=$_GET["mobilenumber"];
$pwd=$_GET["password"];

$querry= "INSERT INTO user (mobilenumber,name,password) VALUES ('$m_no','$nme','$pwd')";
$result = mysqli_query($con,$querry);

if(!$result)
{
	echo mysqli_error($result);
    header("location:ind5.php");
   
}
else
{
	echo $result;
 }
mysqli_close($con);








?>
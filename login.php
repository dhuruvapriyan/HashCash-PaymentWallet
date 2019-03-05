<?php
session_start();
include 'dbms_server_conn.php';
$m_no=$_GET["mobilenumber"];
$pwd=$_GET["password"];
$captcha;
        if(isset($_GET['g-recaptcha-response'])){
          $captcha=$_GET['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          mysqli_close($con);
        }
        $secretKey = "6LeXrpUUAAAAAGBs61DVv4lHmkcl_WUvVh1Ic6ri";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]) {
                
        } else {
			mysqli_close($con);
			header("location:index-2.php");
			
			echo "authentication failed";
        }
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
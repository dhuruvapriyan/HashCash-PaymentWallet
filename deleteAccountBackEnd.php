<?php
session_start();
include 'dbms_server_conn.php';
$m_no=$_SESSION['user'];
$pwd=$_GET["password"];

$querry= "SELECT  * from hashcash.user where mobilenumber=$m_no AND password=$pwd";
$result = mysqli_query($con,$querry);

if(!$result)
{
	echo mysqli_error($result);
	mysqli_close($con);
}
else
{
	$querry2= "DELETE from hashcash.user where mobilenumber=$m_no";
	$result2 = mysqli_query($con,$querry2);
 }

 require 'vendor/autoload.php';

 $params = array(
     'credentials' => array(
         'key' => 'AKIAISDELT3JHFQBRJEQ',
         'secret' => 'nmKRbTVrsPuZyidwKWT2anasxnRo1mdqHBcJQ6Eg',
     ),
     'region' => 'us-west-2', // < your aws from SNS Topic region
     'version' => 'latest'
 );
 $sns = new \Aws\Sns\SnsClient($params);
 
 $args = array(
     "MessageAttributes" => [
                 'AWS.SNS.SMS.SenderID' => [
                     'DataType' => 'String',
                     'StringValue' => '42136547'
                 ],
                 'AWS.SNS.SMS.SMSType' => [
                     'DataType' => 'String',
                     'StringValue' => 'Transactional'
                 ]
             ],
     "Message" => "Hashcash  \n\n Your Account has been deleted successfully. Your Hashcoins will get transferred to your account within a week. Stay tuned for updates. Until then Its bye from team Hashcash. ",
     "PhoneNumber" => '+91'.$m_no
 );
 $result2 = $sns->publish($args);
 echo ("<script LANGUAGE='JavaScript'>
    window.alert('Account Deleted Successfully :(');
    window.location.href='logout.php';
    </script>");

mysqli_close($con);





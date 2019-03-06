<?php
session_start();
include 'dbms_server_conn.php';
$nme=$_GET["name"];
$m_no=$_GET["mobilenumber"];

$querry= "INSERT INTO user (mobilenumber,name,password,loyaltypoints,balance) VALUES ('$m_no','$nme','$m_no',0,0)";
$result = mysqli_query($con,$querry);



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
    "Message" => "We are from team Hashcash. Thank you for registering with us. Your default password is ".$m_no.". Please feel free to change password",
    "PhoneNumber" => '+91'.$m_no
);


$result2 = $sns->publish($args);
echo "<pre>";
var_dump($result2);
echo "</pre>";
if(!$result2)
{
	echo mysqli_error($result2);
   
}
else
{
	echo $result2;
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Account created successfully, Check your phone for password');
    window.location.href='index.php#download';
    </script>");
    
 }
mysqli_close($con);
?>
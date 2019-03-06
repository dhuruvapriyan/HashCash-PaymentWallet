<?php
session_start();
include 'dbms_server_conn.php';
$m_no=$_SESSION['user'];
$to_mno=$_GET["tomobile"];
$amt=$_GET["amount"];
$pwd=$_GET["password"];

$querry= "SELECT * FROM hashcash.user WHERE mobilenumber='$m_no' AND password='$pwd'";
$result = mysqli_query($con,$querry);

if(!$result)
{
	#echo "Transaction Failed";
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Transaction Failed');
    
    </script>");
    
    mysqli_close($con);
}
else
{
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($row["balance"]<$amt){
        #echo "Insufficient Balance";
		
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Insufficient Balance');
    
    </script>");
    
        mysqli_close($con);
    }
    $amt2=$row["balance"]-$amt;
    $querry2= "UPDATE hashcash.user SET balance=$amt2 where mobilenumber=$m_no";
    $result2 = mysqli_query($con,$querry2);
    $querry7= "INSERT INTO hashcash.trdetails (mobilenumber,currentbalance) VALUES ('$m_no','$amt2')";
    $result7 = mysqli_query($con,$querry7);
    if(!$result2)
    {   
        #echo "Transaction Failed";
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Transaction Failed');
    
    </script>");
    
        mysqli_close($con);
    }
    else
    {
        #echo "Transaction Processing Successfully ..... \n";
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Transaction Processing Successfully');
   
    </script>");
    
        
    }
}

$querry3= "SELECT * FROM user WHERE mobilenumber='$to_mno'";
$result3 = mysqli_query($con,$querry3);

if(!$result3)
{
	#echo "Transaction Failed... \n";
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Transaction Failed');
    
    </script>");
    
    mysqli_close($con);
}
else
{
    $row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
    $amt3=$row3["balance"]+$amt;
    $querry4= "UPDATE hashcash.user SET balance=$amt3 where mobilenumber=$to_mno";
    $result4 = mysqli_query($con,$querry4);
    $querry6= "INSERT INTO hashcash.trdetails (mobilenumber,currentbalance) VALUES ('$to_mno','$amt3')";
    $result6 = mysqli_query($con,$querry6);
    if(!$result4)
    {   
       # echo "Transaction Failed\n";
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Transaction Failed');
    
    </script>");
    
        mysqli_close($con);
    }
    else
    {
       # echo "Transaction Processing Successfully\n";
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Sending SMS');
   
    </script>");
    
        
    }
}

$querry5= "INSERT INTO hashcash.transactions (from1,to1,amount) VALUES ('$m_no','$to_mno','$amt')";
$result5 = mysqli_query($con,$querry5);
if(!$result5)
{
    #echo "Transaction Failed";
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Transaction Failed');
   
    </script>");
    
    mysqli_close($con);
}
else
{
	#echo "Transaction Done Successfully";
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Transaction Verified');
    
    </script>");
    
	
}


 if(!$result5)
 {
     #echo "Transaction Failed";
	 echo ("<script LANGUAGE='JavaScript'>
    window.alert('Transaction Failed');
    window.location.href='index-1.php';
    </script>");
     mysqli_close($con);
 }
 else
 {
     #echo "Transaction Done Successfully";
	 echo ("<script LANGUAGE='JavaScript'>
    window.alert('Transaction Done Successfully');
    window.location.href='index-1.php';
    </script>");
     
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
    "Message" => "Hashcash  \n You Transaction processed successfully . \n you have sent ".$amt." rupees to ".$to_mno."\n your current balance is ".$amt2."rupees",
    "PhoneNumber" => '+91'.$m_no
);
$result2 = $sns->publish($args);
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
    "Message" => "Hashcash  \n\n".$m_no." have sent ".$amt."rupees to your account \n your current balance is ".$amt3."rupees",
    "PhoneNumber" => '+91'.$to_mno
);
$result2 = $sns->publish($args);
  mysqli_close($con);
 
 
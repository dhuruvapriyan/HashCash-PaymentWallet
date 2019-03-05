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
	echo "Transaction Failed";
    mysqli_close($con);
}
else
{
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($row["balance"]<$amt){
        echo "Insufficient Balance";
        mysqli_close($con);
    }
    $amt2=$row["balance"]-$amt;
    $querry2= "UPDATE hashcash.user SET balance=$amt2 where mobilenumber=$m_no";
    $result2 = mysqli_query($con,$querry2);
    $querry7= "INSERT INTO hashcash.trdetails (mobilenumber,currentbalance) VALUES ('$m_no','$amt2')";
    $result7 = mysqli_query($con,$querry7);
    if(!$result2)
    {   
        echo "Transaction Failed";
        mysqli_close($con);
    }
    else
    {
        echo "Transaction Processing Successfully ..... \n";
        
    }
}

$querry3= "SELECT * FROM user WHERE mobilenumber='$to_mno'";
$result3 = mysqli_query($con,$querry3);

if(!$result3)
{
	echo "Transaction Failed... \n";
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
        echo "Transaction Failed\n";
        mysqli_close($con);
    }
    else
    {
        echo "Transaction Processing Successfully\n";
        
    }
}

$querry5= "INSERT INTO hashcash.transactions (from1,to1,amount) VALUES ('$m_no','$to_mno','$amt')";
$result5 = mysqli_query($con,$querry5);
if(!$result5)
{
    echo "Transaction Failed";
    mysqli_close($con);
}
else
{
	echo "Transaction Done Successfully";
	
}


 if(!$result5)
 {
     echo "Transaction Failed";
     mysqli_close($con);
 }
 else
 {
     echo "Transaction Done Successfully";
     
 }
 
  mysqli_close($con);
 
 
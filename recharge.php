<?php
session_start();
include 'dbms_server_conn.php';
$m_no=$_SESSION['user'];
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
    $amt2=$row["balance"]+$amt;
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
        echo "Transaction Processed Successfully ..... \n";
        
    }
}
$to_mno=0000000000;
$querry5= "INSERT INTO hashcash.transactions (to1,from1,amount) VALUES ('$m_no','$to_mno','$amt')";
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
mysqli_close($con);
<?php

$uname=$_POST['uname'];
$password=$_POST['password'];
$mail=$_POST['mail'];
$num=$_POST['num'];


$conn= new mysqli('localhost','root','','signup');
if($conn->connect_error)
{

    die('Connection Faild :'.$conn->connect_error);
}else{

  $stmt =$conn->prepare("insert into newsignup(username,emailid,mobileno,password) values(?,?,?,?)");
   $stmt->bind_param("ssis",$uname,$mail,$num,$password);
   $stmt->execute();
    $stmt->close();
 $conn->close();
   echo "success";
   header("login.html");
  
}


?>

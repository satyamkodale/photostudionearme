<?php      
      
    $uname=$_POST['uname'];
    $upassword=$_POST['password'];


    $servername="localhost";
    $username="root";
    $password="";

//databaseconnection
$conn=mysqli_connect($servername,$username,$password,'signup');


if (!$conn) {
        die("Sorry we Faild to connect :".mysqli_connect_error());
        
    }
else {
        /*//to prevent from mysqli injection  
        $uname = stripcslashes($uname);  
        $upassword = stripcslashes($upassword);  
        $uname = mysqli_real_escape_string($conn, $uname);  
        $upassword = mysqli_real_escape_string($conn, $upassword);  
      
        $sql = "select * from newsignup where username = '$uname' and password = '$upassword'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count > 0){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            print "<h1> Login failed. Invalid username or password.</h1>";  
        }  */
        echo "<h1><center> Login successful </center></h1>";
        header("Location:login.html");
    }   
?>
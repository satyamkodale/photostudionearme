

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
    
      <input type="text" name="username" required placeholder="enter your name">
      <input type="email" name="email_id" required placeholder="enter your email">
      <input type="phone" name="phone_no" required placeholder="enter your phone no">
      <input type="text" name="addhar_no" required placeholder="enter your addhar card number">
            
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      

      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>



<?php

include("../config.php");

if(isset($_POST['submit'])){

   if($_POST['password']==$_POST['cpassword'])
   {
      $query="insert into photoshop.user_master(user_name,user_pass,phone_no,email_id,addhar_no,status) values('".$_POST['username']."','".$_POST['password']."','".$_POST['phone_no']."','".$_POST['email_id']."','".$_POST['addhar_no']."',1);";
      if(mysqli_query($con,$query))
      {
      echo "<script>alert('registration successfull');window.location.href='login_form.php';</script>";
      }
      else{
         echo "<script>alert('error :');</script>";
         echo mysqli_error($con);
      
      }
   }
   else
   {
      echo "<script>alert('password and confirm password dont match..!');</script>";
   }


};


?>
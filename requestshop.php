<?php

if(isset($_POST["submitbtn"]))
{
        include("config.php");
        if(mysqli_query($con,"insert into request_master(user_id,shop_id,request_name,request_email,request_phone,request_subject,request_msg,request_status) values(".$_POST["userid"].",".$_POST["shopid"].",'".$_POST["clientname"]."','".$_POST["clientemail"]."','".$_POST["clientphone"]."','".$_POST["clientsubject"]."','".$_POST["clientmsg"]."',1);"))
        {
                echo "<script>alert('Requested send to the store ... we will reach you soon'); window.location.href='shoppages.php';</script>";
        }
        else
        {
            echo "<script>alert('Not able to fullfill your request at this moment. please try again later'); window.location.href='shoppages.php';</script>";
        }
}
else
{
    echo "<script>window.location.href='index.php';</script>";
}

?>
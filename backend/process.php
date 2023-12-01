<?php

include("../config.php");
if(!isset($_SESSION["user_id"]))
{
    echo "<script>window.location.href='login_form.php';</script>";
}

$logotargetdir="uploadimages/logo/";
$phototargetdir="uploadimages/photos/";
$logofilepath = "";
function createPathName($temp)
{

    if(!file_exists($temp))
    {
        return false;
    }
    return true;
}

if(isset($_POST["submitform"]))
{
   

function checkImage()
{
    $check=getimagesize($_FILES["shop_logo"]["tmp_name"]);
    if($check !==false)
    {
        return true;
    }
    else{
        return false;    
    }
}

  
        if(checkImage())
        {
            $filetype=strtolower(pathinfo($_FILES["shop_logo"]["name"],PATHINFO_EXTENSION));
            $logofilepath=$logotargetdir."".$_POST["shop_name"].".".$filetype;
            $i=1;
            while(createPathName($logofilepath))
            {
                $logofilepath=$logotargetdir.$_POST["shop_name"].$i.".".$filetype;
                $i+=1;
            }

            if($filetype != "jpg" && $filetype != "png" && $filetype != "jpeg")
            {
                echo "<script>alert('file type only png, jpeg,jpg is supported');window.location.href='newshop.php'; </script>";
            }
            else
            {
                if(move_uploaded_file($_FILES["shop_logo"]["tmp_name"],$logofilepath))
                {
                    echo "<script>alert('file uploaded successfully');</script>";
                }
                else
                {
                    echo "<script>alert('not uploaded');</script>";
                }
            }

        }

        $wedphoto=0;
        $portphoto=0;
        $birthphoto=0;
        $eventphoto=0;
        $sportsphoto=0;
        $archphoto=0;
        $productphoto=0;
        if(isset($_POST["wedphoto"]))
        {
                $wedphoto=1;
        }
        if(isset($_POST["portraitphoto"]))
        {
                $portphoto=1;
        }
        if(isset($_POST["birthphoto"]))
        {
                $birthphoto=1;
        }
        if(isset($_POST["eventphoto"]))
        {
                $eventphoto=1;
        }
        if(isset($_POST["sportsphoto"]))
        {
                $sportsphoto=1;
        }
        if(isset($_POST["archphoto"]))
        {
                $archphoto=1;
        }
        if(isset($_POST["productphoto"]))
        {
                $productphoto=1;
        }
        

        $query="insert into shop_master(user_id,shop_name,shop_address,shop_description,shop_logo,shop_map_link,shop_insta,shop_face,shop_pinterest,shop_open,shop_close,shop_prefer,shop_spec,shop_wedding,shop_portrait,shop_event,shop_sports,shop_architectural,shop_product,shop_photo_count) values(".$_SESSION["user_id"]." ,'".$_POST["shop_name"]."' , '".$_POST["shop_address"]."' , '".$_POST["shop_description"]."' , '".$logofilepath."' , '".$_POST["glink"]."' ,'".$_POST["instalink"]."' , '".$_POST["fblink"]."' , '".$_POST["pinlink"]."', '".$_POST["opentime"]."' , '".$_POST["closetime"]."' , ".$_POST["prefer"].",'".$_POST["specification"]."' ,".$wedphoto." , ".$portphoto.", ".$eventphoto.", ".$sportsphoto." , ".$archphoto.", ".$productphoto.",   ".count($_FILES["samplephoto"])." );";

        if(mysqli_query($con,$query))
        {
                $result=mysqli_query($con,"select max(id) from shop_master;");
                $data=mysqli_fetch_row($result);

                $total=count($_FILES["samplephoto"]["name"]);

                for($i=0; $i< $total ; $i++)
                {
                    $j=1;
                    $filetype=strtolower(pathinfo($_FILES["samplephoto"]["name"][$i],PATHINFO_EXTENSION));
                    $samplefile=$phototargetdir.$_POST["shop_name"]."sample.".$filetype;
                    while(createPathName($samplefile))
                    {
                        $samplefile=$phototargetdir.$_POST["shop_name"]."sample".$j.".".$filetype;
                        $j++;
                    }
                    move_uploaded_file($_FILES["samplephoto"]["tmp_name"][$i],$samplefile);
                    mysqli_query($con,"insert into shop_photo(shop_id,photo_path) values(".$data[0].",'".$samplefile."');");
                }

                echo "<script>alert('Hurry... Shop Added successfully'); window.location.href='admin.php';</script>";

        }




}



?>
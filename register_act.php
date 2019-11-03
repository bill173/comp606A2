<?php
include("class/user.php");
include("class/message_ok.php");
include("lib/dbconnect.php");




$username=isset($_POST['username'])?$_POST['username']:"";

//echo $username;
//exit;
$password=isset($_POST['password'])?$_POST['password']:"";
//$password=sha1($password);


$re_password=isset($_POST['re_password'])?$_POST['re_password']:"";
//encode password 
//$re_password=sha1($re_password);
$email=isset($_POST['email'])?$_POST['email']:"";
$mobile=isset($_POST['mobile'])?$_POST['mobile']:"";






$row = user::find1($mysqli, $username);


if(!empty($row))
{
    msg_url("duplicate username!","register.php");;

}else
{
   
    if($password!=$re_password)
    {
        msg_url("Two times password must be same!","register.php");;
    }else
    {
        $row1=user::create($mysqli,$username,$password,$email,$mobile);
        if($row1){
            msg_url("Registered successfully","login.php");
        }else{
             msg_url("Registered failed","login.php");
    
        }
    
    
    }




}




?>


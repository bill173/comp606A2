<?php
include("class/user.php");
include("class/message_ok.php");
include("lib/dbconnect.php");



//get value from form
$username=isset($_POST['username'])?$_POST['username']:"";

$password=isset($_POST['password'])?$_POST['password']:"";



$re_password=isset($_POST['re_password'])?$_POST['re_password']:"";

$email=isset($_POST['email'])?$_POST['email']:"";
$mobile=isset($_POST['mobile'])?$_POST['mobile']:"";





//use find1 method of user class
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


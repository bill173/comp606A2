<?php
include("class/Job1.php");
include("class/message_ok.php");


$obj = new Job1("safetrade");

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








$rt=$obj->get_one("user","username='$username'");

if(!empty($rt))
{
    msg_url("duplicate username!","register.php");;

}else
{
   
    if($password!=$re_password)
    {
        msg_url("Two times password must be same!","register.php");;
    }else
    {
    $data=array
    (
        'username'=>$username,
        //'pwd'=>sha1($pwd),
        'password'=>$password,
        'email'=>$email,
        'mobile'=>$mobile

    )
    ;
    $obj->insertdata("user",$data);

    msg_url("You have registered successfully","login.php");
    }




}




?>


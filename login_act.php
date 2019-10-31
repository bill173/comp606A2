<?php
header("content-type:text/html;charset=utf-8");
include("class/Job1.php");
include("class/message_ok.php");

session_start();




$obj=new Job1("safetrade");


$username=isset($_POST["username"])?$_POST["username"]:"";

//
$pwd=isset($_POST["password"])?$_POST["password"]:"";

//$re=isset($_POST["re"])?$_POST["re"]:"";

	$row=$obj->get_one("user", "username='$username'");
	//         $userarr=mysqli_fetch_array($rt);

	
	
			if ($row)
			{
				   if($row['password']==$pwd)
				   {
	//                   setcookie("name",$userarr['uname'],time()+120,"/");
	//               }else{
	//                   setcookie("name",$userarr['uname'],time()-1,"/");
	//               }
	//  登陆成功 记录session 记住用户的登录状态
				   //session_start();
					   $_SESSION['username']=$row['username'];
					   $_SESSION['times']=date("Y-m-d,H:i:s");
	//               $_SESSION['qx']=$row['uqx'];
					 //$this->back_info("登陆成功",$this->surl);
					   msg_url("Login successfully","showJobList.php");
	
				   }else
				   {
					msg_url("Failed,try again please","login.php");
				   }
	
			} else
			{
				msg_url("Incorrect username or password","login.php");
			}
	

       

<?php
header("content-type:text/html;charset=utf-8");
include("class/user.php");
include("class/message_ok.php");
include("lib/dbconnect.php");

session_start();






//get  value from form
$username=isset($_POST["username"])?$_POST["username"]:"";


$pwd=isset($_POST["password"])?$_POST["password"]:"";
$row = user::find($mysqli, $username,$pwd);

    //use method of user class
	
	

	
	
			if ($row)
			{
				   
	//session keeps user's name 
					   $_SESSION['username']=$username;
					   
	
					   msg_url("Login successfully","showJobList.php");
	
				  
			} else
			{
				msg_url("Incorrect username or password","login.php");
			}
	

       

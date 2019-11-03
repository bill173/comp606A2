<?php
include("lib/dbconnect.php");
include("class/Customer.php");
include("class/message_ok.php");


//$obj = new Job1("safetrade");

$username=isset($_POST['username'])?$_POST['username']:"";


$jobname=isset($_POST['jobname'])?$_POST['jobname']:"";



$location=isset($_POST['location'])?$_POST['location']:"";

$description=isset($_POST['description'])?$_POST['description']:"";
$cost=isset($_POST['cost'])?$_POST['cost']:"";



$dov=isset($_POST['dov'])?$_POST['dov']:"";

$dop=date("Y-m-d,H:i:s",time());
$mobile=isset($_POST['mobile'])?$_POST['mobile']:"";



$job=Customer::create($mysqli, $jobname,  $location,$description,$cost,$dop, $dov,$username,$mobile);




   // $data=array
   // (
    //    'username'=>$username,
        
    //    'jobname'=>$jobname,
    //    'location'=>$location,
   //     'mobile'=>$mobile,
    //    'description'=>$description,
        
    //    'cost'=>$cost,
    //    'dov'=>$dov,
     //   'dop'=>$dop,

    //)
   // ;
    //$row = $obj->insertdata("customer",$data);
  
    if($job){
        msg_url("Posted successfully","showJobList.php");
    }else{
         msg_url("Posted failed","post.php");

    }

   









?>


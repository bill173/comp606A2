<?php
include("class/Job1.php");
include("class/message_ok.php");


$obj = new Job1("safetrade");

$username=isset($_POST['username'])?$_POST['username']:"";


$id=isset($_POST['id'])?$_POST['id']:"";



$sex=isset($_POST['gender'])?$_POST['gender']:"";

$age=isset($_POST['age'])?$_POST['age']:"";
$totalcost=isset($_POST['totalcost'])?$_POST['totalcost']:"";

$laborcost=isset($_POST['laborcost'])?$_POST['laborcost']:"";
$materialcost=isset($_POST['materialcost'])?$_POST['materialcost']:"";
$dov=isset($_POST['dov'])?$_POST['dov']:"";


$mobile=isset($_POST['mobile'])?$_POST['mobile']:"";








    $data=array
    (
        'tname'=>$username,
        'wid'=>$id,
        'sex'=>$sex,
        'totalcost'=>$totalcost,
        'mobile'=>$mobile,
        'laborcost'=>$laborcost,
        
        'materialcost'=>$materialcost,
        'tvaliddate'=>$dov,
        'age'=>$age,

    )
    ;
    $row = $obj->insertdata("tradesmen",$data);
    
    if($row){
        msg_url("applyed successfully","myEstimatedJob.php");
    }else{
         msg_url("applyed failed","apply.php");

    }

   









?>


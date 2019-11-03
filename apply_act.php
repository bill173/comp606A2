<?php
include("class/Tradesmen.php");
include("class/message_ok.php");
include("lib/dbconnect.php");


//get the value from form 
$tname=isset($_POST['username'])?$_POST['username']:"";


$wid=isset($_POST['id'])?$_POST['id']:"";



$sex=isset($_POST['gender'])?$_POST['gender']:"";

$age=isset($_POST['age'])?$_POST['age']:"";
$totalcost=isset($_POST['totalcost'])?$_POST['totalcost']:"";

$laborcost=isset($_POST['laborcost'])?$_POST['laborcost']:"";
$materialcost=isset($_POST['materialcost'])?$_POST['materialcost']:"";
$tvaliddate=isset($_POST['dov'])?$_POST['dov']:"";


$mobile=isset($_POST['mobile'])?$_POST['mobile']:"";


//use create method of Tradesmen class
$tradesmen=Tradesmen::create($mysqli, $tname,  $wid,$sex,$age,$totalcost, $laborcost,$materialcost,$tvaliddate,$mobile,$status=0);





    //judge if is successfully
   
    
    if($tradesmen){
        msg_url("applyed successfully","myEstimatedJob.php");
    }else{
         msg_url("applyed failed","apply.php");

    }

   









?>


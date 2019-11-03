
<?php
include("class/Tradesmen.php");
include("class/message_ok.php");
include("lib/dbconnect.php");

//get the value from form
$id=isset($_GET["id"])?$_GET["id"]:"";
$tname=isset($_GET["tname"])?$_GET["tname"]:"";


$status = isset($_GET["status"])?$_GET["status"]:"";
//use confirm method of Tradesmen class
$confirm = Tradesmen::confirm($mysqli, $tname,$id,"","","","","","","",$status);

 //judge if is successfully
if($confirm){
    msg_url("confirmed successfully","confirm.php?id=$id");
}else{
     msg_url("confirmed failed","confirm.php");

}












?>
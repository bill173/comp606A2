
<?php
header("content-type:text/html;charset=utf-8");
include("class/message_ok.php");

require_once("header1.php");

session_start();
if(empty($_SESSION['username'])){
    msg_url("Login Please!","login.php");
}


$id=isset($_GET["id"])?$_GET["id"]:"";

$obj=new Job1("safetrade");
$row=$obj->get_all("tradesmen","tid = '$id'");











?>
<html>

<head>
    <meta charset="utf-8" />
     
   
    <link rel="stylesheet" href="css/hearder1.css" />
    
    <title>freeTrade</title>

   

</head>

<body>
    






<div class="div_tb1">
         <table class="tb1" cellspacing=0px; cellpadding=0px;>
            <tr>
                <th>name</th>
                <th>gender</th>
                <th>age</th>
                <th>total cost</th>
                <th>labor cost</th>
                <th>material cost</th>
                <th>dov</th>
                <th>mobile</th>
                <th></th>
                <th></th>
               
            </tr>
         <?php   foreach($row as $v){  ?>

         
            <tr>
              <td><?php  echo $v['tname'] ?></td>
              <td><?php   echo $v['sex'] ?></td>
              <td><?php  echo $v['age'] ?></td>
              <td><?php   echo $v['totalcost'] ?></td>
              <td><?php  echo $v['laborcost'] ?></td>
              <td><?php   echo $v['materialcost'] ?></td>
              <td><?php  echo $v['tvaliddate'] ?></td>
              <td><?php   echo $v['mobile'] ?></td>
              <td>cancel</td>
              <td><a href="jobDetail.php">comfirm</a></td>
            

           
            </tr>
         <?php } ?>  
        </table>
     </div>
        



 


 <?php
include("footer.php");
?>




</body>

</html>
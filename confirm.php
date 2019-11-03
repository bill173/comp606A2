
<?php
header("content-type:text/html;charset=utf-8");
include("class/message_ok.php");

require_once("header1.php");

session_start();
//judge if there is value in session
if(empty($_SESSION['username'])){
    msg_url("Login Please!","login.php");
}

//get id value
$id=isset($_GET["id"])?$_GET["id"]:"";
//use tradesman class
$tradesmen = Tradesmen::getApplyedDetail($mysqli, $id);









?>
<html>

<head>
    <meta charset="utf-8" />
     
   
    <link rel="stylesheet" href="css/hearder1.css" />
    
    <title>freeTrade</title>

    <style>
   .abc{
       font-size:30px;
       height:600px;
       line-height:500px;
   }
   </style>

</head>

<body>
    




<?php if(empty($tradesmen)){ echo "<p class='abc'> No applyed information </p>";} 
    
    else{?>

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
                <th>status</th>
                <th></th>
               
            </tr>
         <?php   foreach($tradesmen as $v){  ?>

         
            <tr>
              <td><?php  echo $v['tname'] ?></td>
              <td><?php   echo $v['sex'] ?></td>
              <td><?php  echo $v['age'] ?></td>
              <td><?php   echo $v['totalcost'] ?></td>
              <td><?php  echo $v['laborcost'] ?></td>
              <td><?php   echo $v['materialcost'] ?></td>
              <td><?php  echo $v['tvaliddate'] ?></td>
              <td><?php   echo $v['mobile'] ?></td>
              <?php //judge confirmation status,if confirmed,will be marked with red color  ?>
              <td><?php if($v['status']==1){echo "<p style='color:red'> confirmed </p>";}else{ echo "<p style='color:grey'>pendding</p>";} ?></td>
         <td><?php if($v['status']==0){ ?>  <a href="confirm_act.php?status=1&tname=<?php echo $v['tname'] ?>&id=<?php echo $id ?>">confirm </a><?php }else{ ?>
                <a>confirmed </a>
               <?php } ?></td>
            

           
            </tr>
         <?php } ?>  
        </table>
     </div>
        

         <?php }?>

 


 <?php
include("footer.php");
?>




</body>

</html>

<?php
header("content-type:text/html;charset=utf-8");
include("class/message_ok.php");

require_once("header1.php");
//session get username
session_start();
if(empty($_SESSION['username'])){
    msg_url("Login Please!","login.php");
}

$username = $_SESSION['username'];
//use getApplyedJob of Tradesmen class
$tradesmen = Tradesmen::getApplyedJob($mysqli,$username);












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
    






<div class="div_tb1">


<?php  
   if(!empty($tradesmen)){    ?>
         <table class="tb1" cellspacing=0px; cellpadding=0px;>
            <tr>
                <th>ID</th>
               
                
              
                <th>Name</th>
                <th>Mobile</th>
                <th>ValidationTime</th>
                <th>laborcost</th>
                <th>materialcost</th>
                <th>totalcost</th>
                <th>status</th>
                
               
            </tr>
            <?php foreach($tradesmen as $v){ ?>
            <tr>
            <td><?php  echo $v['wid'] ?></td>
            <td><?php   echo $v['tname'] ?></td>
              <td><?php   echo $v['mobile'] ?></td>
             
              <td><?php   echo $v['tvaliddate'] ?></td>
              <td><?php  echo $v['laborcost'] ?></td>
              <td><?php   echo $v['materialcost'] ?></td>
              <td><?php  echo $v['totalcost'] ?></td>
             
              
              <td><?php if($v['status']==0){echo "<p style='color:grey'> pendding </p>";}else{ echo "<p style='color:red'>confirmed</p>";} ?></td>
              
            

           
            </tr>
            <?php  } ?>
        </table>
        <?php 
            }else{
             echo "<p class='abc'> You have not appled any job </p>";
           }
            ?>
     </div>
        



 


 <?php
include("footer.php");
?>




</body>

</html>
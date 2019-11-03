
<?php
header("content-type:text/html;charset=utf-8");
include("class/message_ok.php");

require_once("header1.php");

session_start();
if(empty($_SESSION['username'])){
    msg_url("Login Please!","login.php");
}

//use getALL method of customer class
$job = Customer::getALL($mysqli);













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
                <th>ID</th>
                <th>Jobname</th>
              
                <th></th>
               
               
            </tr>
            <?php foreach($job as $v){ ?>
            <tr>
              <td><?php  echo $v['id'] ?></td>
              <td><?php   echo $v['jobname'] ?></td>
              
              
              <td><a href="jobDetail.php?id=<?php echo $v['id'] ?>">view</a></td>

           
            </tr>
            <?php  } ?>
        </table>
     </div>
        



 


 <?php
include("footer.php");
?>




</body>

</html>
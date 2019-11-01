
<?php
header("content-type:text/html;charset=utf-8");
include("class/message_ok.php");

require_once("header1.php");

session_start();
if(empty($_SESSION['username'])){
    msg_url("Login Please!","login.php");
}

$username = $_SESSION['username'];


$obj=new Job1("safetrade");

$row=$obj->get_all("tradesmen","tname='$username'");












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
               
                
              
                <th>Name</th>
                <th>Mobile</th>
                <th>ValidationTime</th>
                <th>laborcost</th>
                <th>materialcost</th>
                <th>totalcost</th>
                <th>status</th>
                <th></th>
               
            </tr>
            <?php foreach($row as $v){ ?>
            <tr>
            <td><?php  echo $v['tid'] ?></td>
            <td><?php   echo $v['tname'] ?></td>
              <td><?php   echo $v['mobile'] ?></td>
             
              <td><?php   echo $v['tvaliddate'] ?></td>
              <td><?php  echo $v['laborcost'] ?></td>
              <td><?php   echo $v['materialcost'] ?></td>
              <td><?php  echo $v['totalcost'] ?></td>
             
              
              <th><a href="confirm.php?id=<?php echo $v['id'] ?>"></a></th>
              <td><a href="jobDetail.php?id=<?php echo $v['id'] ?>">delete</a></td>
            

           
            </tr>
            <?php  } ?>
        </table>
     </div>
        



 


 <?php
include("footer.php");
?>




</body>

</html>
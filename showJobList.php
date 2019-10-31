
<?php
header("content-type:text/html;charset=utf-8");
include("class/message_ok.php");

require_once("header1.php");

session_start();
if(empty($_SESSION['username'])){
    msg_url("Login Please!","login.php");
}




$obj=new Job1("safetrade");
$row=$obj->get_all("customer");











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
                <th>Location</th>
                <th>description</th>
                <th>Cost</th>
                <th>PublicTime</th>
                <th>ValidationTime</th>
                <th>Name</th>
                <th>Mobile</th>
                <th></th>
               
            </tr>
            <?php foreach($row as $v){ ?>
            <tr>
              <td><?php  echo $v['id'] ?></td>
              <td><?php   echo $v['jobname'] ?></td>
              <td><?php  echo $v['location'] ?></td>
              <td><?php   echo $v['description'] ?></td>
              <td><?php  echo $v['cost'] ?></td>
              <td><?php   echo $v['dop'] ?></td>
              <td><?php  echo $v['dov'] ?></td>
              <td><?php   echo $v['username'] ?></td>
              <td><?php   echo $v['mobile'] ?></td>
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
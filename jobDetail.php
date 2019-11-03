
<?php
header("content-type:text/html;charset=utf-8");
include("class/message_ok.php");

require_once("header1.php");

session_start();
if(empty($_SESSION['username'])){
    msg_url("Login Please!","login.php");
}

//get id value
$id=isset($_GET["id"])?$_GET["id"]:"";


//use customer class find method
$job = Customer::find($mysqli, $id);









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
            
            <tr>
              <td><?php  echo $job->getID() ?></td>
              <td><?php   echo $job->getJobname() ?></td>
              <td><?php  echo $job->getLocation() ?></td>
              <td><?php   echo $job->getDescription() ?></td>
              <td><?php  echo $job->getCost() ?></td>
              <td><?php  echo $job->getDop() ?></td>
              <td><?php echo $job->getDov() ?></td>
              <td><?php  echo $job->getUsername() ?></td>
              <td><?php  echo $job->getMobile() ?></td>
              <td><a href="apply.php?id=<?php echo $id ?>">apply</a></td>
            

           
            </tr>
           
        </table>
     </div>
        



 


 <?php
include("footer.php");
?>




</body>

</html>
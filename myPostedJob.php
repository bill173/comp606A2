
<?php
header("content-type:text/html;charset=utf-8");
include("class/message_ok.php");

require_once("header1.php");

session_start();
if(empty($_SESSION['username'])){
    msg_url("Login Please!","login.php");
}

$username = $_SESSION['username'];


//$obj=new Job1("safetrade");

//$row=$obj->get_all("customer","username='$username'");


$job = Customer::getPostedJob($mysqli,$username);









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
    



<?php if(empty($job)){

echo "<p class='abc'> You have not posted any job </p>";
}else{  
    
    ?>


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
                <th>status</th>
                
               
            </tr>
            <?php foreach($job as $v){ ?>
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
              <th><a href="confirm.php?id=<?php echo $v['id'] ?>">view</a></th>
              
            

           
            </tr>
            <?php  } ?>
        </table>
     </div>
        


            <?php } ?>
 


 <?php
include("footer.php");
?>




</body>

</html>


<?php
header("content-type:text/html;charset=utf-8");
//include("includes/init.php");
//
//$cid=!empty($_GET['cid'])?$_GET['cid']:"";
//
//$cname=$cid==""?"":"-".$obj->get_classname("class","id=$cid","classname");
//
//$rt=$obj->get_classname("config","id=1","webname");
?>
<html>

<html>
<head>


<link rel="stylesheet" href="css/login.css">


<style>


</style>

</head>
<body>

<div class ="login">
 
    
    <div>
    <h2 class="title">Login</h2>
   

    
    <form action="login_act.php" method="post" class="content">
   
    <input type="text" name="username" value="" placeholder="enter username"><br>
    <input type="password" name="password" value="" placeholder="enter password"><br>
    <input type="submit" value="login">
    <a href="register.php">register</a>
    </div>
    

    </form>
 
</div>
</body>
</html>
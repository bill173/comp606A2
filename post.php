<?php
session_start();
$username = $_SESSION['username'];

?>

<html>

<head>

<link rel="stylesheet" href="css/register.css">
</head>

<body>
    <div class="post">
    <h2 class = "title">Post a job</h2>
      
      <form action="post_act.php" method="post" class="content">
      <br><input name="username" type="hidden" value="<?php echo $username  ?>" placeholder="username"><br>
      <br><input name="jobname" type="text" value="" placeholder="jobname"><br>

      <br><input name="location" type="location" value="" placeholder="location"><br>

      <br><input name="description" type="textarea" value="" placeholder="description"><br>

      <br><input name="cost" type="text" value="" placeholder="cost"><br>
      <br><input name="mobile" type="text" value="" placeholder="mobile number"><br>
      <br>expiry date:<input name="dov" type="date" value="" placeholder="expiry date"><br>
     

      <input type="submit" value="Post">

      </form>

   </div>
      
</body>

</html>
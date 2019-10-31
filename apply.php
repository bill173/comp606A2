<?php
session_start();
$username = $_SESSION['username'];
$id=isset($_GET['id'])?$_GET['id']:"";


?>

<html>

<head>

<link rel="stylesheet" href="css/register.css">
</head>

<body>
    <div class="post">
    <h2 class = "title">Apply a job</h2>
      
      <form action="apply_act.php" method="post" class="content">
      <br><input name="username" type="hidden" value="<?php echo $username  ?>"><br>
      <br><input name="id" type="hidden" value="<?php echo $id  ?>" ><br>

      <br><input name="gender" type="text" value="" placeholder="gender"><br>

      <br><input name="age" type="text" value="" placeholder="age"><br>

      <br><input name="totalcost" type="textarea" value="" placeholder="total cost"><br>

      <br><input name="laborcost" type="text" value="" placeholder="labor cost"><br>
      <br><input name="materialcost" type="text" value="" placeholder="material cost"><br>
      <br><input name="mobile" type="text" value="" placeholder="mobile"><br>
      <br>estimated price expiry date:<input name="dov" type="date" value="" placeholder="expiry date"><br>
     

      <input type="submit" value="Apply">

      </form>

   </div>
      
</body>

</html>
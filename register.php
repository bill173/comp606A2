<?php


?>

<html>

<head>

<link rel="stylesheet" href="css/register.css">
</head>

<body>
    <div class="register">
    <h2 class = "title">Welcome</h2>
      
      <form action="register_act.php" method="post" class="content">
      <br><input name="username" type="text" value="" placeholder="username"><br>
      <br><input name="password" type="password" value="" placeholder="password"><br>

      <br><input name="re_password" type="password" value="" placeholder="re_enter password"><br>

      <br><input name="email" type="text" value="" placeholder="email"><br>

      <br><input name="mobile" type="text" value="" placeholder="mobile"><br>

      <input type="submit" value="register">

      </form>
      
</body>

</html>
<?php
  require_once('dbconnect.php');
  
 ?>
 
 <html>
 <head><title>Login</title></head>
 <body>
 <form method="post" action="admin.php">
 <label>User</label>
 </br>
<input type="text" name="user">
<br>
 <label>Pass</label>
 <br>
<input type="password" name="pass">
<br>
<input type="submit" value="submit" name="submit">
 </form>
 </body>
 </html>
 
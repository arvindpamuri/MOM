<?php
    require_once('dbconnect.php');
   if(isset($_POST["submit"]))
   {
     $user= $_POST["user"];
     $pass=$_POST["pass"];
     
     $query="select * from mom_login";
     $sql=mysqli_query($con,$query);
     while($row=mysqli_fetch_array($sql)){
         if($user==$row['user'] && $pass==$row['pass']){
             echo 'punto sucks';
         }
     }
     
   }


?>
<?php
require_once(../dbconnect.php);

$name=$_POST['name'];
$name2=$_POST['name2'];
$sql="INSERT into mom_order (p_id,quantity) values('$name','$name2')";
$query=mysqli_query($con,$sql);
echo $name;
echo $name2;
?>
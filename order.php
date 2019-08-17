<?php
require_once('dbconnect.php');

$query1 = "select * from mom_menu";
$sql=mysqli_query($con,$query1);

while($row=mysqli_fetch_array($sql)){
$pid=$row['p_id'];
echo $pid;
}
?>
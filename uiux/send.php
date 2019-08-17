<?php
require_once('../dbconnect.php');
$p_id=$_POST['p_id'];
$p_quant=$_POST['p_quant'];
$sql="INSERT into mom_order (p_id,quantity) values('$p_id','$p_quant')";
$query=mysqli_query($con,$sql);
?>
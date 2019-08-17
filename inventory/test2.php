<html>
<?php 
require_once('../dbconnect.php');
if (isset($_POST['fname'])): 

            $query='update mom_inventory set quantity=$_POST['fname']';
$sql=mysqli_query($con,$query);
else: ?>
  </html>
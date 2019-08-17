<!DOCTYPE html>
<html><head></head><body>
<?php
require_once('../dbconnect.php');
echo "<h1 align='center' > MOM INVENTORY </h1>";
echo "<img align='center' src='mom.png' width='75' height='75'>";
echo "<hr>";

$query="select * from mom_inventory";
$sql=mysqli_query($con,$query);

echo"
    <table>
    <tr>
    <th>id</th>
    <th>name</th>
    <th>quantity</th>
    <th>edit</th>
    </tr>
  
    
    ";
while($row=mysqli_fetch_array($sql)){
echo'
 <tr>
<td>'.$row['id'].'</td>
<td>'.$row['name'].'</td>
<td>'.$row['quantity'].'</td>
<td> <form action="test2.php">
<input type="number" name="fname">
<input type="submit" value="Submit">
</form></td>
</tr>
';
    
}

?>
  </table>
</body>
</html>
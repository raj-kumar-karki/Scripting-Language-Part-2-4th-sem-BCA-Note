<?php 
$catch = $_GET['id'];
$conn = mysqli_connect("localhost","root","","sd") or die ("connection failure");
$sql = "select * from st where roll= '{$catch}'";
$result = mysqli_query ($conn,$sql)or die("query failure");
$row =mysqli_fetch_assoc($result);
 ?>

 <table>
<form action="updatedata.php" method="get">
	<tr><td>Roll</td><td><input type="text" name="roll" value=<?php echo $row['roll'];?>></td></tr>

	<tr><td>Name</td><td><input type="text" name="name" value=<?php echo $row['name'];?>></td></tr>

	<tr><td>Address</td><td><input type="text" name="address" value=<?php echo $row['address'];?>></td></tr>

	<tr><td><input type="submit" name="submit" value="update"></td></tr>

</form> 	
 </table>
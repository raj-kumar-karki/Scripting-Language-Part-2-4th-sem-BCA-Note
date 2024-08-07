<?php 
$conn = mysqli_connect("localhost","root","","sd") or die ("connection failure");
$r=$_GET['roll'];
$n=$_GET['name'];
$a=$_GET['address'];
$sql = "UPDATE st set name='{$n}', address='{$a}' where  roll={$r}";
mysqli_query($conn,$sql);
header("Location: index.php");
 ?>
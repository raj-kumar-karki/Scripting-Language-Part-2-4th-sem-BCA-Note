<?php 
include 'config.php';
$r=$_POST['roll'];
$n=$_POST['name'];
$a=$_POST['address'];
$sql = "INSERT INTO st (roll, name, address) values ('{$r}','{$n}','{$a}')";
mysqli_query($conn,$sql);

header("Location: index.php");
?>
<?php 
include 'config.php';
$catch =$_GET['id'];
$sql = "DELETE FROM st WHERE 	roll = '{$catch}'";
mysqli_query($conn,$sql) or die ("query failure");
header("Location: index.php");
?>
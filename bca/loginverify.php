<?php 
$conn = mysqli_connect("localhost","root","","sd") or die ("connection failure");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from users where username='$username' and password= '$password'";

$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) ==1)
{
	header ("location:index.php?name=$username");
}
else {

	header ("location:index.php?invalid=Invalid Username Password");
}
 ?>
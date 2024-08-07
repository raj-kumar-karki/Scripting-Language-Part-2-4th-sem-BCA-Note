<?php 
setcookie("username","Rajkumar",time()+8447);
//8447 sec samma cookie save gare rahen
if(isset($_COOKIE['username']))
{
echo "welcome ". $_COOKIE['username'];
}
else{
	echo "welcome guest";
}

 ?>
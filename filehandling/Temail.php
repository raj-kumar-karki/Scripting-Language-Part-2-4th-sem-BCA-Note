<?php 

$to = "pk4505442@gmail.com";
$subject = "Test mail";
$message ="Hello! This is a simple eamil messsage.";
$header = "From:sampu.shakya75@gmail.com";

if(mail($to ,$subject,$message,$header))
{
	echo "Email Sent.";
}else{
	echo "Email Failed.";
}


 ?>
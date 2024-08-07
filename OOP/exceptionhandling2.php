<?php 
function division($n){
	try{
		if($n==0){
			throw new Exception("Enter Valid Number<br>");
		}
		$div = 2/$n;
		echo $div."<br>";
	}
catch (Exception $e)
{
	echo $e->getmessage();
}
}
division(2);
division(0);
division(4);

 ?>
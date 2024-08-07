<?php 
class sam{
	function __construct()
	{
		echo "This is construct function<br>";
	}
	function hello()
	{
		echo "hello<br>";
	}
	function __destruct()
	{
		echo "This is destruct function<br>";
	}
}
 $obj1 = new sam();
 $obj1->hello();
 $obj1->hello();
 $obj1->hello();

 ?>

<?php 
class base{
	public static $name = "Rajkumar<br>";
	public static function show() {
	echo self::$name;
}
}

echo base::$name;
base::show();

 ?>
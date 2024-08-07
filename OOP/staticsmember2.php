<?php 
class base{
	public static $name = "My Country";
}

class derived extends base{
public static function show(){
	echo parent::$name;
}
}
 derived::show();

 ?>

<?php 
class Fruit {
	public $name;
	public $color;
	public function __construct($name, $color){
		$this->name = $name;
		$this->color = $color;
	}
	public function intro(){
		echo $this->name;
		echo "<br>";
		echo $this->color;
	}
}
class Strawberry extends Fruit {
	public function message(){
		echo "Am I a fruit or a berry? <br>";
	}
}
$berry = new Strawberry("Strawberry", "Red"); 
$berry->message();
$berry->intro();

 ?>
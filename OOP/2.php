<?php 
class fruit{
public $name;
public $color;

function set_name($name) {
	$this->name = $name;
}

function get_name() {
	return $this->name;
}
}

$apple = new Fruit();
$mango = new Fruit();
$apple->set_name('Apple');
$mango->set_name('Mango');

echo $apple->get_name();
echo "<br>";
echo $mango->get_name();
 ?>
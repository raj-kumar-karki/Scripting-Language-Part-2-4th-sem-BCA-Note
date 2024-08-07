<?php 
class privateexample{
	private $a = "Sam<br>";
	private function b()
	{
		echo "Nepali";
	}
	public function c()
	{
		echo $this->a;
		echo $this->b();
	}
}
$obj = new privateexample();
$obj->c();


 ?>
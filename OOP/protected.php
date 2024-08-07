<?php 
class parentprotectedexample{
	protected $a = "Sam<br>";
	protected function b()
	{
		echo "Nepali";
	}
}
class childprotectedexample extends parentprotectedexample{
function c()
{
echo $this->a;
$this->b();
}
}
$obj = new Childprotectedexample();
$obj->c();

 ?>
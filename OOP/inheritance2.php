<?php 
class demo 
{
	public function display()
	{
	echo "Example of inheritance";
}
}
class demo1 extends demo 
{
	public function view()
	{
		echo "in php";
	}
}
$obj = new demo1();
$obj->display();
$obj->view();

 ?>							
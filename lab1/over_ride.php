<?php

//.Wrtie a php program with method overriding.
 class NeKaPaEmale {
 	function disp() {
 		echo "super class is NeKaPaEmale <br> ";
 	}
 }

 class NeKaPaS extends NeKaPaEmale {
 	function disp()
 	{
 		echo "NekapaS is the sub  Class of NeKaPaEmale<br>";
 	}
 }
 $objs = new NekapaS;
 $objs->disp();
 $objF= new NeKaPaEmale;
 $objF -> disp();
?>
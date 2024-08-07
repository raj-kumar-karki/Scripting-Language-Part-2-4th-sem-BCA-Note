<?php 
function myTest(){
static $x=0; #static 
echo $x;
$x++;
}

myTest();
echo ("<br>");

myTest();
echo ("<br>");

myTest();
 ?>
 
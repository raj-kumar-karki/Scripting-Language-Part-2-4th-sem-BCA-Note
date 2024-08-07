<?php 
function personName($fname){
	echo "$fname Shakya<br>";
}

personName("Bima");
personName("Puspa");
personName("Sarita");

function hello($fname,$lname){
 echo "Hello! $fname $lname<br>";
 }
hello ("Bill","Gates");


function sum($a,$b){
 echo $a + $b;
}
sum(20,30);
echo"<br>";
//passing with variables
$one = 5;
$two = 10;
sum($one,$two);
echo "<br>";

function add($math,$eng,$sc){
	$s=$math +$eng + $sc;
	return $s;
}

$total = add(5,6,1);
echo $total;

 ?>


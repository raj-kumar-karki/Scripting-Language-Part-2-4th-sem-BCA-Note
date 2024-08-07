<?php 
$age = array("bill" => 25, 
	"steve" => 28,
"elon" => 22
);
echo $age["bill"]. "<br>";
echo $age["steve"]. "<br>";
echo $age["elon"]. "<br>";

echo '<pre>';
print_r($age);
echo '</pre>';

echo '<pre>';
var_dump($age);
echo '</pre>';

echo "<h1>.............................1.......................................</h1>";
 
$age1 = [ 
	"bill" => "25",
	"steve" => 28,
	"elon" => 22
];

echo '<pre>';
print_r($age1);
echo '</pre>';

 ?>
<?php 	
$cars  = array("Volvo","Toyota","BMW");
echo "I like" . $cars[0] . "," .$cars[1]."and". $cars[2].".";
 ?>

<?php
$colors = array('red','yellow','blue','green');
echo $colors[0]."<br>";
$colors = ['red','yellow','blue','green'];

echo "<pre>";
print_r($colors);
echo "</pre>";

$colors[0] = "red";
$colors[1] = "green";
$colors[2] = "yellow";
$colors[3] = "blue";

for ($i=0; $i < 4; $i++) { 
	echo $colors[$i]."<br>";
		}
  ?>

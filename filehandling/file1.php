<?php  
	//readfile("myfile.txt");

	//$file = fopen("myfile.txt", "r");
	//echo fread($file, 10);

	//fwrite($file, "sammpurna");   //yo matra garyo vane wrong

	//$file = fopen("myfile.txt", "r+");  // r+  vayo vane read and write dui tai 
	//initial part overwrite
	//fwrite($file, "sampurna");
	//readfile("myfile.txt");

	$file = fopen("myfile.txt", "w");
	fwrite($file, "kathmandu");  // purai hatayera  na kathmandu lekhxa 
?>
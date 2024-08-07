

<?php

/*Write a php program using SESSION.


session vaneko manage the information accross differnt pages

example: manau facebook ma ekchoti login vaya paxi  feri tyo kholda login na magos */

session_start();
$_SESSION['username'] = "puspa";
$_SESSION['favfood'] = "momo";

echo "we have saved your session";
?>


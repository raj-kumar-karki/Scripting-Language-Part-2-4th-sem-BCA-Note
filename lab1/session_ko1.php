<?php
	session_start();
	echo "welcome". $_SESSION['username'];
	echo "<br> Your favroute khana is ". $_SESSION['favfood'];
	echo "<br>";


?>
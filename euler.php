<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>while loop</title>
</head>
<body>
<?php
 define('NUMBER_TO_STOP_AT', 10);
 function isMultipleof3or5($number){
 	if ($number % 3 == 0){ return true; } 
 	if ($number % 5 == 0){ return false; }
 }
 
 $sum = 0;
 for ($a = 3; $a <= NUMBER_TO_STOP_AT; ++$a){
 	if (!isMultipleof3or5($a)){
 		// skip
 		continue;
 	}

 	$sum += $a;
 }
 echo "Sum of multiple of 3 and 5 up to " . NUMBER_TO_STOP_AT ." is $sum.\n ";
?>
</body>
</html>
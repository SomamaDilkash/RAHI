<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
    <?php
	    $a = 10.1;
	    $b = "10.1";
	    if($a==$b){
	    	echo "Both values are same";
	    } else{
	    	echo "Both value are not Same";
	    } // double equal to only checked value
	?>
	<br/>
	<?php
	    $a = 10.1;
	    $b = "10.1";
	    if($a===$b){
	    	echo "Both values are same";
	    } else{
	    	echo "Both value are not Same";
	    } // triple equal to check both value or data type
	?>
</body>
</html>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
    <?php
	    $age = 20;
	    if ($age>18){
	    	echo "Yes, you are eligible";
	    } else{
	    	echo "No, you are not eligible";
	    }  // comparison operator( Greater than)
	?>
	<br/>
	<?php
	    $age = 17;
	    if ($age>=18){
	    	echo "Yes, you are eligible";
	    } else{
	    	echo "No, you are not eligible";
	    }  // comparison operator( Greater than or equal to)
	?>
</body>
</html>
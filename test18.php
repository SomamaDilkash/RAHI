<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>foreeach loop</title>
</head>
<body>
	<br/>
	<?php
       $students = array ('mark'=>1, 'mark1'=>12, 'mark2'=>123, 'mark3'=>1234, 'mark4'=>12345);
       foreach ($students as $value){
       	echo $value."<br/>";
       }

	?>
</body>
</html>
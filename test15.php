<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>ternary operator</title>
</head>
<body>
     <?php
         $a = 40;
         $b = 10;
         $answer = ($a>$b) ? "A is greater" : "B is greater";
         echo $answer


	?>
	<br/>
	 <?php
         $a = 9;
         $b = 10;
         echo ($a>$b) ? "A is greater" : "B is greater";
         
	?>
	<br/>
	 <?php
         $a = 9;
         $b = 10;
         echo ($a>$b) ? $a : $b;
         
	?>
</body>
</html>
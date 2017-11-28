<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>function with argument</title>
</head>
<body>
     <?php
         function sum($v1,$v2,$v3){
         	$r = $v1 + $v2 - $v3;
         	return $r;

         }

         $v = sum(10,20,5);
         echo $v;
	?>
	
	 
</body>
</html>
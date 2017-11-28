<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>generate random password</title>
</head>
<body>
     <?php
       echo $random_characters = str_shuffle("abcdefghijklmnopqrstuvwxyz")."<br/>";
       echo substr($random_characters,0,8);

	?>
</body>
</html>
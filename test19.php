<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>switch statement</title>
</head>
<body>
     <?php
       $language = "java";
       switch($language){
       	case "php":
       	echo "Language is php";
       	break;

       	case "javascript":
       	echo "language is javascript";
       	break;

       	default:
       	echo "No language selected";
       }
	?>
	<br/>
	<br/>
	<?php
       $language = "php";
       switch($language){
       	case "php":
       	echo "Language is php";
       	break;

       	case "javascript":
       	echo "language is javascript";
       	break;

       	default:
       	echo "No language selected";
       }
	?>
</body>
</html>
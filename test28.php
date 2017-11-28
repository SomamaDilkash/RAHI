<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>redirect page1</title>
</head>
<body>
     <?php
       echo ("<script>
       	     alert('Redirecting');
             window.location.assign('http://php.net/manual/en/timezones.asia.php');
       	<script>");
	?>
</body>
</html>
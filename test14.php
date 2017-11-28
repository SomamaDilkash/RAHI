<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Logical Operator</title>
</head>
<body>
     <?php
         $username = 'admin';
         $password = '12345';
         if($username == 'admin' && $password == '12345'){
         	echo 'welcome';
         } else{
         	echo "Please check username or password";
         }
	?>
	<br/>
	<?php
         $username = 'admin';
         $password = '1';
         if($username == 'admin' && $password == '12345'){
         	echo 'welcome';
         } else{
         	echo "Please check username or password";
         }
	?>
	<br/>
	<?php
         $username = 'somama';
         $password = '12345';
         if($username == 'admin' && $password == '12345'){
         	echo 'welcome';
         } else{
         	echo "Please check username or password";
         }
	?>
	<br/>
	<?php
         $username = 'somama';
         $password = '12345';
         if($username == 'admin' || $password == '12345'){
         	echo 'welcome';
         } else{
         	echo "Please check username or password";
         }
	?>
	<br/>
	<?php
         $username = 'somama';
         $password = '1';
         if($username == 'admin' || $password == '12345'){
         	echo 'welcome';
         } else{
         	echo "Please check username or password";
         }
	?>
	<br/>
	<br/>
	<?php
         $a = 'Hellow';
         if(empty($a)){
         	echo "A has no value";
         } else{
         	echo "A has some value";
         }
	?>
	<br/>
	<?php
         $a = 'Hellow';
         if(!empty($a)){
         	echo "A has some value";
         } else{
         	echo "A has no value";
         }
	?>

</body>
</html>
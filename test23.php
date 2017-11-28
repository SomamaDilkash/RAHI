<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>string function</title>
</head>
<body>
     <?php
       $name = "Somama";
       $len = strlen($name);
       if($len<=8){
        echo "Your password should be more than 8 characters long";
       }
 	?>
    <br/>
    <br/>
    <?php
       $name = strtoupper("somama");
       echo $name;
    ?>
    <br/>
    <br/>
       <?php
       $username = "hackerrahi143@gmail.com";
       $entered = strtolower("Hackerrahi143@gmail.com");
       if($username==$entered){
        echo "Correct";
       } else{
        echo "please check your username";
       }
    ?>

</body>
</html>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
         echo "somama" , " is learning ", "php."
         // here, use print give error
	?>
	<br/>
	<?php
         print "somama"
	?>
	<br/>
	<?php
        $a = "Hellow world";
        echo $a; // Variables
        // $2a = "Hellow world";
        // echo $2; 
	?>
	<br/>
	<?php
	# this is single line comment
        $a = 10; // assign value to a
        $b = 20; //asign value to b
        $c = $a +$b; // add a and b and store it in c
        echo $c; // print value of c
	?>
	<br/>
	<?php
	    $name = "Rock the best";
	    $tut_num = 11;
	    $tut_name = "php";
        echo "Hellow ".$name." this is my tutorial number ".$tut_num." of ".$tut_name; // using of cancatenation operator
	?>
	<br/>
	<?php
	    $a = 20;
	    $b = 10;
	    $c = $a +$b;
	    echo $c;// addition opreter
	?>
	<br/>
	<?php
	    $a = 5;
	    $b = 2;
	    $c = $a % $b;
	    echo $c;//  %(Modulus) Remainder
	?>
	<br/>
	<?php
	    if(6==5){
	    	echo "Yes this is equal";
	    } else{
	    	echo "No this is not equal";
	    } // if, if else statement
	?>
	<br/>
	<?php
	    $a = 10;
	    $b = 20;
	    $c = 30;
	    $d = 40;
	    if($a==$b){
	    	echo "a and b are same";
	    } else if($a==$c){
	    	echo "a and c are same";
	    } else if($a==$d){
	    	echo "a and d are same";
	    } else{
	    	echo "No same value";
	    } //else if statement
	?>
	<br/>
	<?php
	    $a = 10;
	    $b = 20;
	    if($a != $b){
	    	echo "Values are not same";
	    } else{
	    	echo "Values are same";
	    }
	    /*
	    comparison operators
	    1. == (Equal)
	    2. !=, <> (Not Equal)
	    3. > (Greater than)
	    4. >= (Greater than or equal to)
	    5. < (Less than)
	    6. <= (Less than or equsl to)
	    */
	?>
	<br/>
	<?php
	    $a = 10;
	    $b = 10;
	    if($a != $b){
	    	echo "Values are not same";
	    } else{
	    	echo "Values are same";
	    } // comparison operators
	?>
	<br/>
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
	<br/>
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
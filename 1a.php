<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP website</title>
</head>
<body>
	<div>
	<!-- This is my first PHP website -->
	
	<!-- <?php
	  echo "hello world";
	?> -->
<!-- 	

	<?php
  		echo "Hello World!";
	?>

	<?php
	   echo "Hello again";
	   ?> -->
<!-- php is all about dollar -->
<!-- php is dynamically typed language -->
<!-- it is not case sensitive  -->
	   <!-- <?php     
        $a = 43;
        echo $a;
		 ?>  -->

		 <!-- Operators in php -->
		 <!-- Arithemetic Operators : +, -, *, ?
		 Assignment Operators
		 Conditional Opearators
		 Logical Operators
		 Comparision Operators
		 Increment/Decrement Operators -->

		 <!-- Arithemeric operators -->
         
		 <?php

		 define('Pi', 3.14);
		 echo "<h1>Hypertext Preprocessor</h1>";
		 echo "<h2>Illustration of Arithmetic Operaotor</h2>";
		 $a = 34; // here 34 is signing to a which represent an assignment operator += , -=, *=, /=
		 $b = 43;
			echo "a= ",$a;
			echo "<br>";
			echo "b= ",$b; 
			echo "<br>";
				
		    echo "The sum of a + b is: ";
		    echo $a + $b;

			echo "<br>";
			echo "The difference of a - b is: ";
		    echo $a - $b;
			echo "<br>";

			echo "The product of a * b is: ";
		    echo $a * $b;
			echo "<br>";

			echo "The dividend of a / b is: ";
		    echo $a / $b;
			echo "<br>";
			
			// comparision operator which returns boolean value ==, !=, <=, >=

			//increment  a++,++a
			//decrement a--,--a

			// $d = 2;
			// $e = 3;

			// echo $d++;
			// echo ++$d;
			// echo $d;
			// echo $e--;
			// echo --$e;
			// echo $e;

			//logical operator and(&&), or(||), xor, not(!)

			//Datatypes in hypertext preprocessor
			//   1.Integer
			//   2.Float
			//   3.String
			//   4.Boolean
			//   5.Array
			//   6.Object


			// $my = "My name is Prabin kumar Shah.";
			// echo var_dump($my);

			// $my = true;
			// echo var_dump($my);
			echo var_dump(Pi);
		 ?>
	</div>
</body>
</html>
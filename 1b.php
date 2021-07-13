<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

</head>
	<style>
	*{
		margin:0;
		padding: 0;	
		
	}
	.container{
		max-width: 80%;
		background-color: rgb(165, 98, 98);
		margin:auto;
		padding: 23px;

	}
	</style>
<body>
<div class="container">
<h1>Let's learn about php</h1>
   
  <?php
//   $age = 11;
//   if($age > 18){
//      echo "You can vote.";
//   } else{
// 	  echo "You cannot vote.";
//   }

   $fruit = array("Apple","Mango","Orange","Banana","Guava","Pomogranate","Watermelon");
  
//   $i = 0;
//   while ($i < count($fruit)) {
// 	  echo $fruit[$i];
// 	  $i++;
//   }

  // count  return no. of element in an array
//   echo count($fruit);

  // Loops in PHP

  //Iterating loops in php using while loop
//   $a = 0;
//   while ($a <= 10) {
// 	  echo "</br>I am anonymous!";
// 	  $a++;
//   }

//Iterating loops in php using do-while loop
//  do {
// 	echo "</br>I am anonymous!";
// 	$a++;
// } while ($a <= 10);

// Iterating loops in php using for loop

// for($i = 0; $i < 10; $i++){
// 	echo "hello world </br>";
// }

//foreach loop
//it plays big role itrating through an array

// foreach($fruit as $a){
// 	echo" </br> ";
// 	echo $a;
// }

// function sum($a, $b){
// 	echo "The sum of a + b = ";
// 	echo $a +$b;
// }

// sum(4,5);

  ?>
</div>
	
</body>
</html>
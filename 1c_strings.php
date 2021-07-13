<?php
   $str = "This is me Prabin";
   echo $str. "</br>";

   $len = strlen($str);
   echo "The length of string is ".$len;
   echo "</br>The no. of words in the string is ".str_word_count($str);
   echo "</br>The reverse string is ". strrev($str);
   echo "</br>The search for is in this string is ".strpos($str,"is");
   echo "</br>The replaced string is ".str_ireplace("is","at",$str);



?>
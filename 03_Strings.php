<?php
/*
Strings :-
Strings are an important concept in PHP. Learning how strings work in PHP and how to manipulate them will make you a very effective and productive developer. Some of the functions are given below:
*/
$str = "This <br>";
echo $str;
$len = strlen($str);
echo "The length of this string is" .   $len;

$str = "This this this";
    echo $str. "<br>";
    $lenn = strlen($str);
    echo "The length of this string is ". $lenn . ". Thank you <br>";
    //  . -> dot is using in php as a concatenation operator
    echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";
    echo "The reversed string is ". strrev($str) . ". Thank you <br>";
    echo "The search for is in this string is ". strpos($str, "is") . ". Thank you <br>";
    echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";
    // echo $lenn;

/*The above code has some of the build-in functions for the string :    
1)Strlen(): This function returns the length of the string, taking string as the parameter.

2)str_word_count(): This function returns the number of words in the string, taking string as the parameter.

3)strrev(): This function returns the reverse of a string, taking string as the parameter.

4)strops(): The strpos() function finds the position of the first occurrence of a string inside another string. 
One important part to keep in mind is, The PHP concatenation operator (.) is used to combine two string values to create one string.


*/


?>

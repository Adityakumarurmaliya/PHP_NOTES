<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP notes</title>
</head>
<style>
    *{
     margin:0;
     padding:0; 
     box-sizing:border-box;
    }
        .container{
            max-width: 80%;
            background-color:gray;
margin:auto;
padding :23px;



        }
    </style>
<body>
   <div class="container">
    <h1>Let's learn about php</h1>
<p>Your party status is here:</p>
<?php
/*
*****Conditional Statements (If-else)*****
PHP if-else statement is used for decision making. This means you can create conditions in the form of expressions that evaluates to either true or false and based on these results, you can perform specific actions. There are various ways to use if statements in PHP.
=>if
=>if-else
=>if-else-if
*/
$age=7;
if($age>18){
    echo "You can go to party";
}
else if($age==7){
    echo "You are 7 year old";
}
else if($age==6){
    echo "You are 6 year old";
}
else{
    echo "You cannot  go to party"; 
}
echo " <br>";
//Arrays in php
// PHP Arrays provides a way to group many variables such that they can be referenced and manipulated using a single variable. It is a self-contained list of variables.  In other words, the special variable can hold more than one value at a time. 
$languages = array("python","c++","php","nodejs");
echo $languages[2];
echo count ($languages); // this will count item = 4

//loops in php
/*Loops are used to execute the same block of code until a certain condition is met. Loop is to automate the repetitive tasks within a program to save time and effort. PHP supports four different types of loops.

* While:-  the block of code is executed until the condition is true.
* do…while:- the block of code executed once and then the condition is evaluated. If the condition is true, the statement is repeated as long as the condition is true.
* For:- the block of code is executed until the condition is true.
* Foreach:- loops through a block of code for each element in an array.
* While loop:- The block of code is executed until the condition is true. This while loop can be used to iterate over the array. 

* Do-while loop:- The do-while loop is a variant of the while loop, which checks the condition at the end of each loop iteration. With a do-while loop, the block of code is executed once, and then the condition is evaluated. If the condition is true, the statement is repeated as long as the specified condition evaluated to is true.

* PHP for Loop:- The parameters of for loop have the following meanings:

* initialization — it is used to initialize the counter variables and evaluated once unconditionally before the first execution of the body of the loop.
* Condition — in the beginning of each iteration, the condition is evaluated. If it evaluates to true, the loop continues, and the nested statements are executed. If it evaluates to false, the execution of the loop ends.
* Increment — it updates the loop counter with a new value. It is evaluated at the end of each iteration.

* PHP foreach Loop:- The foreach loop is used to iterate over arrays.*/

// Loops in PHP
$a = 0;
while ($a <= 10) {
    # code...
    echo"<br>The value of a is : ";
    echo $a;
    $a++;
}

// while ($a < 10) {
//     echo "<br>The value of a is: ";
//     echo $a;
//     $a++;
// }

// Iterating arrays in PHP using while loop
$a = 0;

while ($a < count($languages)) {
    echo "<br>The value of language is: ";
    echo $languages[$a];
    $a++;
}

// Do while loop
$a = 200;
do {
    echo "<br>The value of a is: ";
    echo $a;// out put is 200 beecause must run for 1 Iteration
    $a++;
} while ($a < 10);

// For loop
for ($a=60; $a < 10; $a++) { 
    echo "<br>The value of a from the for loop is: ";
    echo $a;
}
// For each loop
foreach ($languages as $value) {
    echo "<br>The value from foreach loop is ";
    echo $value;
}
   //Function in PHP

/*
What is a Function in PHP?
You must have come across the word function. Let’s know the meaning of it. A Function is a reusable piece or block of code that performs some action. It takes input from the user in the form of parameters, performs certain actions, and gives the output. Functions can either return values when called or can simply perform an operation without returning any value.
*/
echo "<br>";
function print5(){
    echo"FIVE";

}
print5();//OUTPUT =>FIVE


function print_number($number){
    echo "<br>Your number is ";
    echo $number;
}
print_number(56);  //=>OUTPUT ->56
print_number(96);  //=>OUTPUT ->96
print_number(22);  //=>OUTPUT ->22
/*
Function can be classified into two types :-
1) Build-in function.
2) User-defined function.
Built-in functions are predefined functions in PHP that exist in the installation package
A module of a program created by a user for reusable purposes is known as a user-defined function.
*/


z



?>


   </div>








</body>
</html>
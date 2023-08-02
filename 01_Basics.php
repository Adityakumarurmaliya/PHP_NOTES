<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
    This is my first php website
    <?php
    echo "Hello baba";
            // Single line comment
        /*
            This
            is 
            a
            multi
            line
            comment
        */

        $variable1 = 5;
        $variable2 = 2;
        echo $variable1;
        echo $variable2;
        // Arithmetic Operators 
    echo "<br>";
    echo "The value of varible1 + variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of varible1 - variable2 is ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of varible1 * variable2 is ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of varible1 / variable2 is ";
    echo $variable1 / $variable2;
    echo "<br>";
           // Arithmetic Operators
    $newvar=$variable1;
    $newvar +=1; 
    $newvar -=1; 
    $newvar *=1; 
    $newvar /=1; 
    echo "the value of new varible is ";
    echo $newvar;
    echo "<br>";
    // Comparison Operators
    // echo "<h1> Comparison Operators </h1>"; // this line created h1 heading here
    echo "The value of 1==4 is ";
    echo var_dump(1<4);//The function var_dump() displays structured information (type and value) about one or more expressions/variables. 
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);//The function var_dump() displays structured information (type and value) about one or more expressions/variables. 
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";
    
    // Increment/Decrement Operators 
    // echo $variable1++;
    // echo $variable1--;
    // echo ++$variable1;
    echo --$variable1;
    echo "<br>";
    echo $variable1;
    
   
    // Logical Operator
    // and  => (&&)True if both $x and $y are true
    // or   => (||)True if either $x or $y is true
    // xor  => True if either $x or $y is true, but not both
    // !    => True if $x is not true

    // $myVar = (true and true);
    // $myVar = (false and true);
    // $myVar = (false and false);
    // $myVar = (true and false);
    // $myVar = (true or false);

    // $myVar = (true xor true);    //=> false
    // $myVar = (false xor false);  //=> false
    // $myVar = (false xor true);   //=> true
    // $myVar = (true xor false);   //=> true
    // $myVar = (false and true);      //=> false
   $myVar = (true and true);     // =>  true
    echo "<br>";
    echo var_dump($myVar);
    echo "<br>";
    ?>
     <?php
    //Data type in php

    //   String  => Alphanumeric characters are classified as strings.
    //   Float   =>  Numbers with decimal points are classified as floating points.
    //   Integer => Whole numbers are classified as integers. 
    //   Boolean => True or false values are classified as Boolean.
    //   Array   => Collection of similar types of elements are called Array.
    //   Object  => An object is a specific instance of a class that serves as templates for objects.
    // As told earlier, PHP determines the data types by analyzing the values of the data supplied.
    $var = "this is a string";
    echo var_dump($var); // string(16) "this is a string"
    echo "<br>";
    $var =67;
    echo var_dump($var);
    echo "<br>";
    $var =67.1;
    echo var_dump($var);
    echo "<br>";
    $var =true;
    echo var_dump($var);
    echo "<br>";

    // PHP Constant :-
    // Just by the name, we can understand that constant is something whose value cannot be changed. It is basically an identifier. A good practice 
    // is always to define it in the starting.
    define('PI3',3.14);
    echo PI3;


     ?>



 </div>



</body>
</html>

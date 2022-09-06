<!-- 
    PHP function is a piece of code that can be reused many times. It can take input as argument list and return value. There are thousands of built-in functions in PHP.
    In PHP, we can define Conditional function, Function within Function and Recursive function also.
-->

<?php 
    // normal function
    function normalFun(){
        echo "Normal Function <br>";
    }
    normalFun();

    //function with argument
    function funWithArg($name){
        echo "$name <br>";
    }
    $nam = "Nil";
    funWithArg($nam);

    //function with multiple argument
    function funWithMultiArg($name,$age){
        echo "Name :$name <br>";
        echo "Age  :$age <br>";
    }
    $name="Nil"; $age=23;
    funWithMultiArg($name,$age);

    //call by reference
    function adder(&$str2){
        $str2 .= 'Call by reference <br>'; 
    }
    $str="Function";
    adder($str);

    //optional parameter function
    function funWithOptArg($name="Nil"){
        echo "Hello $name <br>";
    }
    funWithOptArg();

    //return function
    function cude($n){
        return $n*$n*$n;
    }
    echo "".cude(4);

?>
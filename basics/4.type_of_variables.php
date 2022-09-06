
<!-- PHP has three types of variable scopes: -->
<!-- 
Local variable:
The variables that are declared within a function are called local variables for that function. These local variables have their scope only in that particular function in which they are declared. This means that these variables cannot be accessed outside the function, as they have local scope. 
-->

<?php 
    function get_name(){
        $name = "Nilesh Rajpurohit";
        return $name;
    }
    echo "<br> Hello ". get_name();
    echo "<br> $name";
?>


<!-- 
Global variable:
The global variables are the variables that are declared outside the function. These variables can be accessed anywhere in the program. To access the global variable within a function, use the GLOBAL keyword before the variable. However, these variables can be directly accessed or used outside the function without any keyword. Therefore there is no need to use any keyword to access a global variable outside the function.
-->

<?php 
    $name = "Nilesh Rajpurohit";
    function get_name1(){
        global $name;
        return $name;
    }

    function get_name2(){
        return $GLOBALS['name'];
    }

    echo "<br> Hello ".get_name1();
    echo "<br> Hello ".get_name2();
    echo "<br> Hello $name";
?>

<!-- 
Static variable:
It is a feature of PHP to delete the variable, once it completes its execution and memory is freed. Sometimes we need to store a variable even after completion of function execution. Therefore, another important feature of variable scoping is static variable. We use the static keyword before the variable to define a variable, and this variable is called as static variable.
-->

<?php 
    function static_var(){
        static $num_1 = 1;
        $num_2 = 1;
        
        $num_1++;
        $num_2++;

        echo "<br>Num 1 : $num_1";
        echo "<br>Num 2 : $num_2";
    }
    echo  static_var();
    echo  static_var();
?>
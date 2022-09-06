<!-- Rules for declaring PHP variable:

A variable must start with a dollar ($) sign, followed by the variable name.
It can only contain alpha-numeric character and underscore (A-z, 0-9, _).
A variable name must start with a letter or underscore (_) character.
A PHP variable name cannot contain spaces.
One thing to be kept in mind that the variable name cannot start with a number or special symbols.
PHP variables are case-sensitive, so $name and $NAME both are treated as different variable. -->

<?php 
    $name = 'Nilesh Rjpurohit'; // string
    $age = 23; // integer
    $married = false; // boolean
    $salary = 17500.50; // float
    $language = array('PHP','Javascript','C++','C','Java'); // array
    $property = new stdClass(); // object
    $property->eye_color = 'brown';
    $property->hair_color = 'brown';
    $property->height = '5\'6';
    $property->weight = 56;

    echo "Name : $name <br>";
    echo "Age : $age <br>";
    echo "Married : $married <br>";
    echo "Salary : ".number_format(floatval($salary),2,'.','')." <br>";
    
    echo "Language Know : <br>";
    foreach($language as $lang){
        echo "&nbsp; &nbsp; &nbsp; $lang<br>";
    }

    echo "$property->eye_color <br>";
    echo "$property->hair_color <br>"

?>
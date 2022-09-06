<!-- PHP also supports recursive function call like C/C++. In such case, we call current function within function. It is also known as recursion.

It is recommended to avoid recursive function call over 200 recursion level because it may smash the stack and may cause the termination of script. -->

<?php 

function display($number) {    
    if($number<=5){    
     echo "$number <br/>";    
     display($number+1);    
    }  
}    

display(2);



function factorial($n)    
{    
    if ($n < 0)    
        return -1; /*Wrong value*/    
    if ($n == 0)    
        return 1; /*Terminating condition*/    
    return ($n * factorial ($n -1));    
}   

factorial(5);

?>
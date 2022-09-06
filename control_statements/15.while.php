<!-- 
    PHP while loop can be used to traverse set of code like for loop. The while loop executes a block of code repeatedly until the condition is FALSE. Once the condition gets FALSE, it exits from the body of loop.

    It should be used if the number of iterations is not known.

    The while loop is also called an Entry control loop because the condition is checked before entering the loop body. This means that first the condition is checked. If the condition is true, the block of code will be executed. 
-->


<?php

    $n=1;    
    while($n<=10){    
        echo "$n<br/>";    
        $n++;    
    }    
    

    while($n<=10):   
        echo "$n<br/>";    
        $n++;    
    endwhile; 
    
    
    $i = 'A';  
    while ($i < 'H') {  
        echo $i;  
        $i++;  
        echo "</br>";  
    }


    $i=1;    
    while($i<=3){    
        $j=1;    
        while($j<=3){    
            echo "$i   $j<br/>";    
            $j++;    
        }    
        $i++;    
    } 


    // while (true) {  
    //     echo "Hello Javatpoint!";  
    //     echo "</br>";  
    // } 
?>
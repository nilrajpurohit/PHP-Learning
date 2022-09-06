<!-- PHP do-while loop can be used to traverse set of code like php while loop. The PHP do-while loop is guaranteed to run at least once.
    The PHP do-while loop is used to execute a set of code of the program several times. If you have to execute the loop at least once and the number of iterations is not even fixed, it is recommended to use the do-while loop.
    It executes the code at least one time always because the condition is checked after executing the code.
    The do-while loop is very much similar to the while loop except the condition check. The main difference between both loops is that while loop checks the condition at the beginning, whereas do-while loop checks the condition at the end of the loop.
-->

<?php 
    $n=1;    
    do{    
        echo "$n<br/>";    
        $n++;    
    }while($n<=10); 

    echo"<br>";

    $x = 5;  
    do {  
        echo "Welcome to javatpoint! </br>";  
        $x++;  
    } while ($x < 10);  

    echo"<br>";

    $x = 1;  
    do {  
        echo "1 is not greater than 10.";  
        echo "</br>";  
        $x++;  
    } while ($x > 10);  
    echo $x;  
    echo"<br>";

?>
<!-- 
PHP supports variable length argument function. It means you can pass 0, 1 or n number of arguments in function. To do so, you need to use 3 ellipses (dots) before the argument name.
The 3 dot concept is implemented for variable length argument since PHP 5.6.
Let's see a simple example of PHP variable length argument function.
-->


<?php 
    function add(...$numbers) {  
        $sum = 0;  
        foreach ($numbers as $n) {  
            $sum += $n;  
        }  
        return $sum;  
    }  
      
    echo add(1, 2, 3, 4);
?>
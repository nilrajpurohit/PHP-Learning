<!-- 
    The PHP continue statement is used to continue the loop. It continues the current flow of the program and skips the remaining code at the specified condition.

    The continue statement is used within looping and switch control structure when you immediately jump to the next iteration.

    The continue statement can be used with all types of loops such as - for, while, do-while, and foreach loop. The continue statement allows the user to skip the execution of the code for the specified condition.
-->


<?php 

for ($i =1; $i<=3; $i++) {  
    //inner loop  
    for ($j=1; $j<=3; $j++) {  
        if (!($i == $j) ) {  
            continue;       //skip when i and j does not have same values  
        }  
        echo $i.$j;  
        echo "</br>";  
    }  
} 

echo "<br>";

$i = 1;  
while ($i<=20) {  
    if ($i %2 == 1) {  
        $i++;  
        continue;   //here it will skip rest of statements  
    }  
    echo $i;  
    echo "</br>";  
    $i++;  
}     

?>
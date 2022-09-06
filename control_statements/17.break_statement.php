<!-- 
    PHP break statement breaks the execution of the current for, while, do-while, switch, and for-each loop. If you use break inside inner loop, it breaks the execution of inner loop only.

    The break keyword immediately ends the execution of the loop or switch structure. It breaks the current flow of the program at the specified condition and program control resumes at the next statements outside the loop.

    The break statement can be used in all types of loops such as while, do-while, for, foreach loop, and also with switch case.
-->

<?php 
    for($i=1;$i<=10;$i++){    
        echo "$i <br/>";    
        if($i==5){    
            break;    
        }    
    }   

    echo "<br>";

    for($i=1;$i<=3;$i++){    
        for($j=1;$j<=3;$j++){    
         echo "$i   $j<br/>";    
            if($i==2 && $j==2){    
                break;    
            }    
        }    
    }   
?>
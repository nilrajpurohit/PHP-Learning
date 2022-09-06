<!-- 
    PHP for loop can be used to traverse set of code for the specified number of times.
    It should be used if the number of iterations is known otherwise use while loop. This means for loop is used when you already know how many times you want to execute a block of code.
    It allows users to put all the loop related statements in one place. See in the syntax given below:
-->

<?php 

// for loop
for($n=1;$n<=10;$n++){
    echo "$n";
}


// infinite loop  
// $i = 1; 
// for (;;) {  
//     echo $i++;  
//     echo "</br>";  
// }


echo "<br>";
$i = 1;  
for (; ; ) {  
    if ($i > 9) {  
        break;  
    }  
    echo $i ;  
    $i++;  
}


echo "<br>";
for ($i = 1, $j = 0; $i <= 9; $j += $i, print($i."-".$j."<br>"), $i++);  


//Nested for loop
for($i=1;$i<=3;$i++){    
    for($j=1;$j<=3;$j++){    
        echo "$i   $j<br/>";    
    }    
}    


// for loop array
$season=array("summer","winter","spring","autumn");  
foreach( $season as $arr ){  
  echo "Season is: $arr<br />";  
}  
?>
<!-- PHP array is an ordered map (contains value on the basis of key). It is used to hold multiple values of similar type in a single variable.

There are 3 types of array in PHP.

Indexed Array
Associative Array
Multidimensional Array
-->

<?php 
    // Indexed Array
    $season=array("summer","winter","spring","autumn");  
    echo "Season are: $season[0], $season[1], $season[2] and $season[3] <br>"; 
    
    // Associative Array
    $salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");    
    echo "key: value <br/>";  
    echo "Sonoo salary: ".$salary["Sonoo"]."<br/>";  
    echo "John salary: ".$salary["John"]."<br/>";  
    echo "Kartik salary: ".$salary["Kartik"]."<br/>"; 

    //Multidimensional Array
    $emp = array(  
        array(1,"sonoo",400000),  
        array(2,"john",500000),  
        array(3,"rahul",300000));  
    
    for ($row = 0; $row < 3; $row++) {  
        for ($col = 0; $col < 3; $col++) {  
            echo $emp[$row][$col]."  ";  
        }  
        echo "<br/>";  
    }
?>

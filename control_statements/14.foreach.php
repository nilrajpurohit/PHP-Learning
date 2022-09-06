<?php  
    //declare array  
    $season = array ("Summer", "Winter", "Autumn", "Rainy");  
      
    //access array elements using foreach loop  
    foreach ($season as $element) {  
        echo "$element";  
        echo "</br>";  
    }  

    echo "<br>";
  
    //declare array  
    $employee = array (  
        "Name" => "Alex",  
        "Email" => "alex_jtp@gmail.com",  
        "Age" => 21,  
        "Gender" => "Male"  
    );  
        
    //display associative array element through foreach loop  
    foreach ($employee as $key => $element) {  
        echo $key . " : " . $element;  
        echo "</br>";   
    }

    echo "<br>";


    //declare multi-dimensional array  
    $a = array();  
    $a[0][0] = "Alex";  
    $a[0][1] = "Bob";  
    $a[1][0] = "Camila";  
    $a[1][1] = "Denial"; 
    
    //display multi-dimensional array elements through foreach loop  
    foreach ($a as $e1) {  
        foreach ($e1 as $e2) {  
            echo "$e2 <br>";
        }  
    }

    echo "<br>";


    //dynamic array  
    foreach (array ('j', 'a', 'v', 'a', 't', 'p', 'o', 'i', 'n', 't') as $elements) {  
        echo "$elements\n";  
    }
?>
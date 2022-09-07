<!-- PHP array_intersect() function returns the intersection of two array. In other words, it returns the matching elements of two array. -->

<?php    
    $name1=array("sonoo","john","vivek","smith");    
    $name2=array("umesh","sonoo","kartik","smith");    
    $name3=array_intersect($name1,$name2);
    foreach( $name3 as $n )    
    {    
    echo "$n<br />";    
    }    
?> 
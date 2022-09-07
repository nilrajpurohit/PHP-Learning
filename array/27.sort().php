<!-- PHP sort() function sorts all the elements in an array. -->

<?php    
    $season=array("summer","winter","spring","autumn");    
    sort($season);  
    foreach( $season as $s )    
    {    
        echo "$s<br />";    
    }    
?>
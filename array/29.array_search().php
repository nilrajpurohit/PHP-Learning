<!-- PHP array_search() function searches the specified value in an array. It returns key if search is successful. -->

<?php    
    $season=array("summer","winter","spring","autumn");    
    $key=array_search("spring",$season);  
    echo $key;
?>
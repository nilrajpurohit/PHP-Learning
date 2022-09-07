<!-- Compares array against arrays and returns the difference. Unlike array_diff() the array keys are also used in the comparison. -->

<?php
    $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red","yellow");
    $array2 = array("a" => "green", "yellow", "red");
    $result = array_diff_assoc($array1, $array2);
    
    print_r($result);
?>
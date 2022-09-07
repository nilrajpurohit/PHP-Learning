<!-- Compares array against one or more other arrays and returns the values in array that are not present in any of the other arrays. -->


<?php
    $array1 = array("a" => "green", "red", "blue", "red");
    $array2 = array("b" => "green", "yellow", "red");
    $result = array_diff($array1, $array2);

    print_r($result);
?>
<!-- array_count_values() returns an array using the values of array as keys and their count in array as values. -->

<?php
    $array = array(1, "hello", 1, "world", "hello");
    print_r(array_count_values($array));
?>
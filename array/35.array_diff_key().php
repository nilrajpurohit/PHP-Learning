<!-- Compares the keys from array against the keys from arrays and returns the difference. This function is like array_diff() except the comparison is done on the keys instead of the values. -->


<?php
    $array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
    $array2 = array('green' => 5, 'yellow' => 7, 'cyan' => 8);

    print_r(array_diff_key($array1, $array2));
?>
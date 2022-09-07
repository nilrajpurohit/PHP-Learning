<!-- Compares the keys from array against the keys from arrays and returns the difference. This function is like array_diff() except the comparison is done on the keys instead of the values. -->

<?php
    function key_compare_func($key1, $key2)
    {
        if ($key1 == $key2)
            return 0;
        else if ($key1 > $key2)
            return 1;
        else
            return -1;
    }

    $array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
    $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

    print_r(array_diff_ukey($array1, $array2, 'key_compare_func'));
?>
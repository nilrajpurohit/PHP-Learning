<!-- Fills an array with the value of the value parameter, using the values of the keys array as keys. -->


<?php
    $keys = array('foo', 5, 10, 'bar');
    $a = array_fill_keys($keys, 'banana');
    print_r($a);
?>
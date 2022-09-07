<!-- Creates an array by using the values from the keys array as keys and the values from the values array as the corresponding values. -->

<?php
    $a = array('green', 'red', 'yellow');
    $b = array('avocado', 'apple', 'banana');
    $c = array_combine($a, $b);

    print_r($c);
?>
<!-- PHP array_change_key_case() function changes the case of all key of an array. -->
<?php    
    $salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");    
    print_r(array_change_key_case($salary,CASE_UPPER));   
?>    
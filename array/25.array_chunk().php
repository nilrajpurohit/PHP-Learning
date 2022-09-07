<!-- PHP array_chunk() function splits array into chunks. By using array_chunk() method, you can divide array into many parts. -->

<?php    
    $salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");    
    print_r(array_chunk($salary,2)); 
?>  
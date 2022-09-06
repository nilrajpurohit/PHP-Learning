<?php 

function adder($str2)  
{  
    $str2 .= 'Call By Value';  
}  
$str = 'Hello';  
adder($str);  
echo $str;  


function increment($i)  
{  
    $i++;  
}  
$i = 10;  
increment($i);  
echo $i;  


?>
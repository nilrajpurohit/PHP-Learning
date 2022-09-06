<!-- 
Print statement in php:
print is a statement, used as an alternative to echo at many times to display the output.
print can be used with or without parentheses.
print always returns an integer value, which is 1.
Using print, we cannot pass multiple arguments.
print is slower than the echo statement. -->


<?php 
//Single line
print "<br> By using print language construct";
print("<br> By using print() function");


//Multi line
print "<br> By using print 
printing multi line statement!";


//Escape sequence
print "<br> Escape \"sequence\" statement";

// Varaiable printing 
$name = "Hello";

print "<br> $name PHP";
//
?>
<!--
    PHP constants are name or identifier that can't be changed during the execution of the script except for magic constants, which are not really constants. PHP constants can be defined by 2 ways:

    Using define() function
    Using const keyword
 -->


 <?php  
    define("MESSAGE","Hello Nilesh Rajpurohit");
    const msg = 'Hello Nilesh Rajp';  
    echo MESSAGE . "<br>"; 
    echo msg . "<br>"; 
?>  
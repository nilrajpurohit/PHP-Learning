<!-- 
    PHP switch statement is used to execute one statement from multiple conditions. It works like PHP if-else-if statement. 
    Note:
    The default is an optional statement. Even it is not important, that default must always be the last statement.
    There can be only one default in a switch statement. More than one default may lead to a Fatal error.
    Each case can have a break statement, which is used to terminate the sequence of statement.
    The break statement is optional to use in switch. If break is not used, all the statements will execute after finding matched case value.
    PHP allows you to use number, character, string, as well as functions in switch expression.
    Nesting of switch statements is allowed, but it makes the program more complex and less readable.
    You can use semicolon (;) instead of colon (:). It will not generate any error.
-->

<?php 
    
    $num=20;   
    // Normal Switch    
    switch($num){      
        case 10:      
        echo("number is equals to 10 <br>");      
        break;      
        
        case 20:      
        echo("number is equal to 20 <br>");      
        break;      
        
        case 30:      
        echo("number is equal to 30 <br>");      
        break;      
        
        default:      
        echo("number is not equal to 10, 20 or 30 <br>");      
    }
    
    // Nested Switch 
    switch($num){      
        case 10:      
        echo("number is equals to 10 <br>");      
        break;      
        
        case 20:      
        echo("number is equal to 20 <br>");
        switch($num){      
            case 10:      
            echo("number is equals to 10 <br>");      
            break;      
            
            case 20:      
            echo("number is equal to 20 <br>");      
            break;      
            
            case 30:      
            echo("number is equal to 30 <br>");      
            break;      
            
            default:      
            echo("number is not equal to 10, 20 or 30 <br>");      
        }      
        break;      
        
        case 30:      
        echo("number is equal to 30 <br>");      
        break;      
        
        default:      
        echo("number is not equal to 10, 20 or 30 <br>");      
    }
    
?>
<!-- 
    PHP if else statement is used to test condition. There are various ways to use if statement in PHP.

    if
    if-else
    if-else-if
    nested if
-->

<?php 
    if(true){
        echo "If Block... <br>";
    }


    if(false){
        echo "If Block... <br>";
    }else{
        echo "Else Block... <br>"; 
    }


    if(false){
        echo "If Block... <br>";
    }elseif(true){
        echo "ElseIf Block... <br>"; 
    }else{
        echo "Else Block... <br>"; 
    }


    if(true){
        echo "If Block... <br>";
        if(true){
            echo "Nested If Block... <br>";
        }
    }
?>
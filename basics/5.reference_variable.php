<!-- 
    The $$var (double dollar) is a reference variable that stores the value of the $variable inside it.
 -->

 <?php 
    $x = "abc";
    $$x = 200;  // reference variable

    echo "<br>$ x : $x";
    echo "<br>$$ x : $$x";
    echo "<br>$ abc : $abc <br>";
 
    $name="Cat";  
    ${$name}="Dog";  
    ${${$name}}="Monkey"; 

    echo $name. "<br>";  
    echo ${$name}. "<br>";  
    echo $Cat. "<br>";  
    echo ${${$name}}. "<br>";  
    echo $Dog. "<br>";  
 ?>


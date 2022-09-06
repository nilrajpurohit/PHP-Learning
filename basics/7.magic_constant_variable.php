<!-- 
    Magic constants are the predefined constants in PHP which get changed on the basis of their use. They start with double underscore (__) and ends with double underscore.
    
    They are similar to other predefined constants but as they change their values with the context, they are called magic constants.
    
    There are nine magic constants in PHP. In which eight magic constants start and end with double underscores (__).
-->


<?php 
echo "<br> ". __LINE__;
echo "<br> ". __FILE__;
echo "<br> ". __DIR__;

function get_function_name(){
    echo "<br> ". __FUNCTION__;
}
get_function_name();


class example {
    public function get_class_name(){
        echo "<br> ".__CLASS__;
    }
}
$c = new example;
$c->get_class_name();


trait create_trait{
    function trait_name(){
        echo "<br> ".__TRAIT__;
    }
}
class Company{
    use create_trait;
}
$a = new Company;
$a->trait_name();
 

function meth_fun(){      
    echo "<br> ".__METHOD__;   
}  
meth_fun();


class name {    
    public function __construct() {    
        echo '<br> This line will print on calling namespace.';     
    }     
}    
$class_name = __NAMESPACE__ . '\name';    
$a = new name;

echo "<br>".name::class;     
?>
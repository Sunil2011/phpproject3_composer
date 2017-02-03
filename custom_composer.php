<?php
//namespace myp ;
require 'lib/sunil_lib.php';

/*$class = 'sunil_lib';
function my_autoloader($class){
    $filename = 'lib/'.$class.'.php';
    require $filename ;
}
spl_autoload_register('my_autoloader');*/ //no autoloading for functions

//use \compose\MaxMin as MaxMin;
//use \compose\avg as avg  ;
$arr = array(5,7,9,11,-10,90,55,40);
MaxMin($arr);
$p = avg($arr);
echo '<br>'.'average is : '.$p ;

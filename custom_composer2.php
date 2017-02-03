<?php
$class = 'sunil_lib';
function my_autoloader($class){
    $filename = 'lib/'.$class.'.php';
    require $filename ;
}
spl_autoload_register('my_autoloader');

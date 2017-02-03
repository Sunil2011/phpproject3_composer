<?php
//namespace compose ;
function MaxMin($arr){
    $mx = max($arr);
    $mn = min($arr);
    //echo $arr .'<br>';
    $l = count($arr);
    echo 'your entered values are :  ';
    for($i=0;$i<$l;$i++){
        echo $arr[$i],' ';
    }
    echo'<br>'.'maximum value is : '.$mx .'<br>'.'and minimum value is : '.$mn;
    //return $str ;
}
//echo '<hr>';
//$arr = array(2,3,5,7,10);
//MaxMin($arr);

function avg ($arr){
    $sum = array_sum($arr);
    $num = count($arr);
    $avg = $sum/$num ;
    return $avg;
}
//$k = avg($arr);
//echo '<br>'.'average = '.$k;

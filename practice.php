<?php



$numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];

isEven (1);
function isEven($n){
    if($n % 2 == 0){
     return true;
    }

    return false;



}

$evenEnum = array_filter($numbers, "isEven");


print_r ($evenEnum);

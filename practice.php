<?php



$people = [

    ['name'=>'A','gender'=>'male'],
    ['name'=>'B','gender'=>'female'],
    ['name'=>'C','gender'=>'female'],
    ['name'=>'D','gender'=>'male'],
    ['name'=>'E','gender'=>'female'],
];

function isMale($person){
    if($person['gender']=='male'){
     return true;
    }

    return false;



}
function isFemale($person){
    if($person['gender']=='female'){
     return true;
    }

    return false;

}

$males = array_filter($people, "isMale");


print_r ($males);

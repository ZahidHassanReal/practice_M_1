<?php

$books = [

    ["id"=>"1", "title"=>"javascript", "author"=>"manik chad"],
    ["id"=>"2", "title"=>"php", "author"=>"manik. kalam. ajad"],
    ["id"=>"3", "title"=>"java", "author"=>"manik"],
    ["id"=>"4", "title"=>"node", "author"=>"maninka miya avinue"],
    ["id"=>"5", "title"=>"laravel", "author"=>" AB"],
    ["id"=>"6", "title"=>"javascript 2", "author"=>"manik chad"],

];

function sortByAuthorName($book1, $book2){
    if(strlen($book1['author']) > strlen($book2['author'])){
        return -1;
    }elseif(strlen($book1['author']) < strlen($book2['author'])){
        return 1;
}else{
    return 0;
}

}

usort ($books, "sortByAuthorName");

print_r($books);
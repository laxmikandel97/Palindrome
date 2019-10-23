<?php
function average($a,$b){
return(($a+$b)/2);
}
function largest($c,$d){
    if($c>$d){
        return $c;
    }
    else{
        return $d;
    }
}
function hello($name=""){
    echo  "<h1> Hello, $name</h1>";
}
function isPalindrome($word) {

    $word = str_replace(" ", "", $word);
    $word = strtolower($word);
    $word = preg_replace('/[^a-z\d]+/i', '', $word);
    $wordrev = strrev($word);

    return $wordrev==$word;


}
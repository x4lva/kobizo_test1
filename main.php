<?php


function MinMax(array $a){
    return max($a) - min($a);
}

// Function using recursion
function Sum($n){

    if ($n==0){
        return 0;
    }

    return $n+Sum($n-1);
}

echo MinMax([1,4,5,3,17]);

echo "<br>";

echo Sum(3);



?>
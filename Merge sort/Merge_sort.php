<?php
function mergeSort($nb){
    if(count($nb) <= 0){
        return $nb;
    }
    $mid = count($array) / 2;
    $left = array_slice($array, 0, $mid);
    $right = array_slice($array, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);

     return merge($left,$right);
}

function merge($left, $right){
    $merged = [];
    $i = 0;
    $j = 0;
    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] <= $right[$j]) {
            $merged[] = $left[$i];
            $i++;
        } else {
            $merged[] = $right[$j];
            $j++;
        }
    }
    while ($i < count($left)) {
        $merged[] = $left[$i];
        $i++;
    }
    while ($j < count($right)) {
        $merged[] = $right[$j];
        $j++;
    }

    return $merged;
}
?> 
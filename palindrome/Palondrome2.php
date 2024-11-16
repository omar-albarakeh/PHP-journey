<?php
function len($str){
    $length=0;
    for($i=0; $str[$i] != "" ;$i++){
        $length+=1;
    }
    return $length;
}
function palindrome($str){
    $length=len($str);
    if($length ==0){
        echo "string is empty";
    }
    $is_palindro=true;
    for($i=0;$i<$length/2;$i++){
        if($str[$i] !== $str[$length -$i -1]){
            $is_palindro=false;
            break;
        }
    }
      if ($is_palindrome) {
        echo "This string is a palindrome.";
    } else {
        echo "This string is not a palindrome.";
    }
}

?>
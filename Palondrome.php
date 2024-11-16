<?php

function len($str){
    $length=0;
    for($i=0; $str[$i] != "" ;$i++){
        $length+=1;
    }
    return $length;
}


function Palondrome($str){
$length = len($str);


    if($length == 0){
        echo "empty string ";
        return;
    }
    else
    {
        if($length%2 == 0)
        {
            $first_half=[];
            $second_half=[];

            for($i=0;$i<($length/2);$i++){
                $first_half[$i]=$str[$i];
            }
            for($i=$length-1 ;$i>=$length/2;$i--){
                $second_half[]=$str[$i];
            }
            $is_palindrome=true;
            for($i=0;$i<($length/2);$i++){
                if($first_half[$i] !== $second_half[$i]){
                    $is_palindrome=false;
                    break;
                }
            }
                if ($is_palindrome) {
                    echo "This string is a palindrome."; 
                    } 
                else {
                    echo "This string is not a palindrome.";
                }
        }
        else{
            $first_half=[];
            $second_half=[];

            for($i=0;$i<($length/2);$i++){
                $first_half[$i]=$str[$i];
            }
            for($i=$length-1 ;$i>$length/2;$i--){
                $second_half[]=$str[$i];
            }
            $is_palindrome=true;
            for($i=0;$i<($length/2);$i++){
                if($first_half[$i] !== $second_half[$i]){
                    $is_palindrome=false;
                    break;
                }
            }
                if ($is_palindrome) {
                    echo "This string is a palindrome."; 
                    } 
                else {
                    echo "This string is not a palindrome.";
                }

        }
    }
}

?>
<?php


function checkNumbers($score){
    $split_score = str_split($score);
    $scores = [];
    foreach ($split_score as $value){
        if (preg_match("/[0-9]/",$value)){
            array_push($scores, $value);
        }
    }
    return join("",$scores);

}


?>
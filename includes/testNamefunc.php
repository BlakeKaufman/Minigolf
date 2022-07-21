<?php

$players_index =[];

function testName($name){
    if (!empty($name)){
    $name = strtoupper(filtername($name));
    if (is_int(array_search($name, $GLOBALS["players_index"]))){
        $name .= "2";
        array_push($GLOBALS["players_index"], $name); 
    }else{
        array_push($GLOBALS["players_index"], $name);
    }
    } else{
        $name = "";
    }

    return $name;
}


function filtername($name){
    return substr($name,0,3);
}

?>
<?php

function makeArrayFlatt(array $array){
    $result = [];
    
    foreach($array as $item){
        if(is_array($item)){
            $result = array_merge($result , makeArrayFlatt($item));
        }else{
            $result[] = $item;
        }
    }

    return $result;
}

$sample = [4,[[5],[6,[7],8],9,10]];
$res = makeArrayFlatt($sample);

var_dump($res);
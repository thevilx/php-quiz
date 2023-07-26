<?php

function transformDeclarative(array $array, callable $callback): array {
    return array_map($callback, $array);
}

function transformImperative(array $inputArray, callable $callback): array {
    $resultArray = [];
    foreach ($inputArray as $item) {
        $resultArray[] = $callback($item);
    }
    return $resultArray;
}

// Example usage:
$array = [1, 2, 3, 4, 5];
$callback = function($item) {
    return $item * 2;
};


$newArrayDec = transformDeclarative($array , $callback);
$newArrayImp = transformImperative($array , $callback);


var_dump($newArrayDec , $newArrayImp); // result of declaritive



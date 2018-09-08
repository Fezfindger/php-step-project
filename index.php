<?php
/**
 * Created by PhpStorm.
 * User: Fezfindger
 * Date: 26.08.2018
 * Time: 15:40
 */
 echo 'Test';
 
$array = ['str1' => 25, 'str2' => 'string'];
function toArray (int $firstArg, int $secondArg): array {
    return [$firstArg => $secondArg];
//$array = [1.5, 5, 9, 'string'];
////for($i =0, $c = count($array); $i<$c; $i++){
////
////}
//foreach ( $array as $key => $value){
//    $serializedValue = [];
//    if (is_array($value)){
//$newValue = serialize($value);
//print_r($newValue);
//    }
//    echo $value;
//    echo '<br>';
//    echo $key;
//    echo '<br>';
//    echo '<br>';
}
print_r(toArray(25,26));
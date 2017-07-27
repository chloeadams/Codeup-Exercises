<?php
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'Justin', 'Ryan'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
function isInArray($needle, $haystack) 
{
    if (array_search($needle, $haystack) === false) {
        return false;
    } else {
        return true;
    }
}
function numberOfValuesInCommon($array1, $array2)
{
    $count = 0;
    // $value first time through the array is the string 'Tina'
    foreach($array1 as $value) {
        if(isInArray($value, $array2)) {
            $count++;
        }
    }
    return $count;
}
// with two array functions, destroying original arrays
// function combine_arrays($arr1, $arr2) {
// 	$outputArray = [];
// 	foreach($arr1 as $value) {
// 		$arr1Value = array_shift($arr1);
// 		$arr2Value = array_shift($arr2);
// 		if ($arr1Value === $arr2Value) {
// 			array_push($outputArray, $arr1Value);
// 		} else {
// 			array_push($outputArray, $arr1Value, $arr2Value);
// 		}
// 	}
// 	return $outputArray;
// }
// print_r(combine_arrays($names, $compare));

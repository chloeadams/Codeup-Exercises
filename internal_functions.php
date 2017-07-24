<?php

// TODO: Create your inspect() function here
$a = "";
$b = "";

function inspect ($data) {
	if ($var($a) === true) {
		echo "Yes, this is true"; 
	} else ($var($b)=== false){
		echo "No, this is false";
	}

}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;

function inspectBooleanOne ($var) {
	if (is_bool($bool1) === true) {
		echo "Yes, this is a boolean"; 
	} else (is_bool($bool1) === false){
		echo "No, this is not a boolean";
	}

}

echo 'Inspecting $bool2' . PHP_EOL;

function inspectBooleanTwo ($var) {
	if (is_bool($bool2) === true) {
		echo "Yes, this is a boolean"; 
	} else (is_bool($bool2) === false){
		echo "No, this is not a boolean";
	}

}

echo 'Inspecting $string1' . PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;

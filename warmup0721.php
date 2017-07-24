<?php 

$testArray = [2, 1, -5, "bob"];

$result = 0;

foreach ($testArray as $element) {
	//inside the loop is the element is numeric...
	if (is_numeric($element)) {
		// covert neg numbers to pos
		if ($element < 0) {
			$element *= -1;
		} //if/else to check if even or odd
		if ($element % 2 ==0){
			//mult number to result 
			$result *= $element;
		} else {
			// add number to result 
			$result += $element;
		}
	}

	// echo $element . PHP_EOL ; //foreach through each element in the array
}

echo $result; //echo the result 
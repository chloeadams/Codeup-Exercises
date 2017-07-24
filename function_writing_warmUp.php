<?php


$firstLetterCaptitalizedInput = " "

function makeItTitleCase (str) {
	return ucFirst(strToLower($str));

} 

echo makeItTitleCase("aBc");

$firstName = ""
$lastName = ""

function greeting ($firstName, $lastName) {
	$output = " " ;
	$output = "$firstName", "$lastName"

	if (is_string($firstName) && is_string($lastName)) {
		$output = "Hello, $firstName $lastName!";
	} else {
		$output = "Sorry, two valid names were not given."
	}
	return $output;
}

echo greeting ("Chloe", "Adams") . PHP_EOL;
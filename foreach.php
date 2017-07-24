<?php

//Create a file named foreach.php in you exercises directory. Commit each step and push to GitHub.



// PHP provides us with many functions to test the types of values. Here is a list of functions you can use to test types that you already know about.

// is_array() - Checks if value is of type array
// is_bool() - Checks if value if of type boolean
// is_float() - Checks if value is of type float
// is_double() - alias of is_float()
// is_real() - alias of is_float()
// is_int() - Checks if value is of type integer
// is_integer() - alias of is_int()
// is_long() - alias of is_int()
// is_null() - Checks if value is of type null
// is_numeric() - Checks if value is of type float or integer
// is_scalar() - Checks if value is of type float, integer, string, or boolean
// is_string() - Checks if value is of type string



//Use the following array to complete the practice exercises.

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 



//Construct a loop that iterates through each value and outputs its type as either integer, float, boolean, array, null, or string.

 foreach($things as $thing) {
    if(is_integer($thing)) {
        echo "$thing is an integer" . PHP_EOL;
    } else if (is_float($thing)) {
        echo "$thing is a float" . PHP_EOL;
    } else if(is_bool($thing)) {
        echo "$thing is a boolean" . PHP_EOL;
    } else if (is_array($thing)) {
        echo "$thing is an array" . PHP_EOL;
    } else if(is_null($thing)) {
        echo "null" . PHP_EOL;
    } else if(is_string($thing)) {
        echo "$thing is a string" . PHP_EOL;
    }
}





//Construct a loop that iterates through each value and outputs only values with a type that is scalar.
foreach($things as $thing) {
    if(is_scalar($thing)) {
        echo $thing . PHP_EOL;
    }
}


//Create a loop that will echo out every value, including those nested in arrays. Output should look like this.



 //Sgt. Pepper
 //11

 //Array (loop through inner array display here)
 //3.14
 //12 + 7

 //11

foreach($things as $thing) {
    if(is_array($thing)) {
        foreach($thing as $element) {
            echo $element . " ";
        }
    } else {
        echo $thing . PHP_EOL;
    }
}
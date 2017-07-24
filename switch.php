 <?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
     case 1:
         // Output Monday
     echo "Monday" . PHP_EOL;
     break;

     case 2:
         // Output Tuesday
     echo "Tuesday" . PHP_EOL;
     break;
     // etc through day 7
     
     case 3:
         // Output wednesday
     echo "Wednesday" . PHP_EOL;
     break;
     
     case 4:
         // Output Thursday
     echo "Thursday" . PHP_EOL;
     break;
     
     case 5:
         // Output friday
     echo "Friday" . PHP_EOL;
     break;
     
     case 6:
         // Output saturday
     echo "Saturday" . PHP_EOL;
     break;
     
     case 7:
         // Output Tsunday
     echo "Sunday" . PHP_EOL;
     break;
     
         
 }

 // Test and verify the results before proceeding by creating a matching if block. The output should be identical.
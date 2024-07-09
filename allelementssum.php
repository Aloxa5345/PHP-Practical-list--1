<?php

$arr = [13, 12, 03, 16, 53, 45];

// Initialize sum with 0
$sum = 0;

// Loop through the array and add
// each element to the sum
for ($i = 0; $i < sizeof($arr); $i++) {
    $sum = $sum + $arr[$i];
}

// Display the result
echo "Sum of Array Values:" . $sum;

?>

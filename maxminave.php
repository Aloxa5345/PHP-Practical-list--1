<?php
// Returns maximum in array
function getMax($array) 
{
   $n = count($array); 
   $max = $array[0];
   for ($i = 1; $i < $n; $i++) 
       if ($max < $array[$i])
           $max = $array[$i];
    return $max;       
}

// Returns maximum in array
function getMin($array) 
{
   $n = count($array); 
   $min = $array[0];
   for ($i = 1; $i < $n; $i++) 
       if ($min > $array[$i])
           $min = $array[$i];
    return $min;       
}

// Driver code
$array = array(13, 12, 03, 53, 45);
echo(getMax($array));
echo("\n");
echo(getMin($array));
?>

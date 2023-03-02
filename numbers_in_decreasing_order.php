<?php
// PHP program to solve question number 2.
// The given Problem "2.	Solve the above exercise [1], such that the remaining numbers are in decreasing order"
// k elements in increasing order
// and remaining n-k elements in
// decreasing
 
// Function to sort the array
function printOrder($arr, $n, $k)
{
    $len1 = $k;
    $len2 = $n - $k;
    $arr1 = array_fill(0, $k, 0);
    $arr2 = array_fill(0, ($n - $k), 0);
 
    // Store the k elements
    // in an array
    for ($i = 0; $i < $k; $i++)
        $arr1[$i] = $arr[$i];
 
    // Store the remaining n-k
    // elements in an array
    for ($i = $k; $i < $n; $i++)
        $arr2[$i - $k] = $arr[$i];
 
    // sorting the array from
    // 0 to k-1 places
    sort($arr1);
 
    // sorting the array from
    // k to n places
    sort($arr2);
 
    // storing the values in the
    // final array arr
    for ($i = 0; $i < $n; $i++)
        if ($i < $k)
            $arr[$i] = $arr1[$i];
 
        else
        {
            $arr[$i] = $arr2[$len2 - 1];
            $len2 -= 1;
    }
     
    // printing the array
    for ($i = 0; $i < $n; $i++)
        print($arr[$i] . " ");
}
 
// Driver code
$arr = array( 9, 44, 32, 12, 7, 42, 34, 92, 35, 37, 41, 8, 20, 27, 83, 64, 61, 28, 39, 93, 29, 17, 13, 14, 55, 21, 66, 72, 23,
73, 99, 1, 2, 88, 77, 5, 65, 83, 84, 62, 5, 11, 74, 68, 76, 78, 67, 75, 69, 70, 22, 71, 24, 25, 26, );
$k = 4;
 
$n = count($arr);
 
printOrder($arr, $n, $k);
 
?>

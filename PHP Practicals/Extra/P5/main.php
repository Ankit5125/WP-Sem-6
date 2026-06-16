<?php
$arr = array(10, 5, 20, 15, 30);

echo "Original Array: ";
print_r($arr);
echo "<br><br>";

echo "Count: " . count($arr);
echo "<br>";

sort($arr);
echo "Sorted Array: ";
print_r($arr);
echo "<br>";

rsort($arr);
echo "Reverse Sorted Array: ";
print_r($arr);
echo "<br>";

echo "Sum of Array: " . array_sum($arr);
echo "<br>";

echo "Product of Array: " . array_product($arr);
echo "<br>";

array_push($arr, 40);
echo "After Push: ";
print_r($arr);
echo "<br>";

array_pop($arr);
echo "After Pop: ";
print_r($arr);
echo "<br>";

$rev = array_reverse($arr);
echo "Reversed Array: ";

print_r($rev);
echo "<br>";

$arr2 = array(1, 2, 2, 3, 3, 4);
echo "Unique Array: ";
print_r(array_unique($arr2));
echo "<br>";

if (in_array(20, $arr)) {
    echo "20 is present in array";
} else {
    echo "20 is not present in array";
}

?>
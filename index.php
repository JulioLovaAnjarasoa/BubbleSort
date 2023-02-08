<?php

include 'includes/bubblesort.php';

$bubblesort = new BubbleSort();
$array = array();

for ($i = 0; $i < 100; $i++) {
    $array[$i] = rand(0, 100);
}
$bubblesort->bubbleSort($array);
echo "Sorted array : \n";
echo "<br>";
foreach ($array as $key => $value) {
    print('Indice ' . $key . ' => ' . $value);
    echo "<br>";
}

<?php

class BubbleSort
{

    function bubbleSort(&$array)
    {
        $n = sizeof($array);
        do {
            $newn = 0;
            for ($j = 0; $j < $n; $j++) {
                if ($array[$j] < $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                    $newn = $j;
                }
            }
            $n = $newn;
        } while ($n != 0);
    }
}

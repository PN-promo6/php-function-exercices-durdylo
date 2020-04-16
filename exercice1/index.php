<?php
function sumAll(int $val)
{

    $sum = 0;
    for ($i = 0; $i < $val; $i++) {
        # code...
        $sum  += $i;
    }
    echo $sum;
}
sumAll(5);

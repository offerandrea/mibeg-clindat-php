<?php

// =================

// Fakultät einer Zahl
// 5! = 120
// 3!! = 3*2*1 = 6


function factorial_loop($n) {
    $result = 1;

    if ($n < 1) {
        return 0;
    }
    // Start mit 2 um die idempotente Berechnung „Multiplikation mit 1“ zu überspringen
    for ($i=2; $i <= $n; $i++) { 
        $result = $result * $i;
    }

    return $result;
}

function factorial_rec($num) {
    if ($num <= 1) {
        return 1;
    }

    return $num * factorial_rec($num-1);
}


?>
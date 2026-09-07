<?php

use BcMath\Number;


function which_is_smaller($zahl1, $zahl2) {
    return min($zahl1, $zahl2);
}

$nummer = which_is_smaller(4, 2);

var_dump($nummer);
?> 

//zweite option bsp____

<?php
function smaller($zahl1, $zahl2) {
    if ($zahl1 < $zahl2) {
        return $zahl1;
    } else {
        return $zahl2;
    }
}

print smaller(5, 3) . PHP_EOL;

    ?>
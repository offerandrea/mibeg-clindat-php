<?php


/*function is_even_or_odd($num) {
    if ($num % 2 === 0) {
         return true;
         }
    else {
        return false;
      }
*/

/*funktion
if - num teilbar only durch 1 und durch $num; num nicht teilbar durch num-1 schleife*/

function is_prime($num) {
    for  ($i = $num - 1;
        $i > 1;
        $i -=1) 
        { 
        if ($num % $i === 0){
         return false;
         }
    }
        return true;
}

var_dump(is_prime (19))
    ?>
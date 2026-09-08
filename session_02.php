<?php

function which_is_smaller2($n1, $n2) {
    if ($n1 < $n2) {
        return $n1;
    } 
    else {
        return $n2;
        }
    }
print which_is_smaller2 (13, 5) . PHP_EOL;

// Schleifen
// While Schleife
$counter = 10;
while ($counter >= 0) {
    print "$counter" . PHP_EOL;
    $counter = $counter - 1;
    /*$counter--; (heißt: 1 subtrahieren)
    $counter++ 1; (heißt 1 addieren)
    $counter -= 5;
    $counter += 5;
    $counter *= 5;
    $counter /= 5;*/

//Do-While Schleife
do {
    print "$counter" . PHP_EOL;
    $counter--;
}
while ($counter >= 20);

do {
    $pin = readline("Willkommen zum Online-Banking. Ihre PIN bitte: ");
} while ($pin !== "cancel");

$counter = 0;
while (true) {
    $counter++;

    if ($counter % 5 === 0) {
        print "$counter ist durch 5 teilbar" . PHP_EOL;
    }

    print $counter . PHP_EOL;

    if ($counter >= 50) {
        print "Schleife beendet." . PHP_EOL;
        break;
    }
}

$counter = 0;
for (
    $i = 0; //Startwert
    $i < 10; //Abbruchbedingung
    $i += 2 //Stepfunktion
) {
    print "$i\n";
}

function is_even_or_odd($num) {
    if ($num % 2 === 0) {
         return true;
         }
    else {
        return false;
        }
/*if - num teilbar only durch 1 und durch $num; num nicht teilbar durch num-1 schleife
        
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


        function is_prime (int $Zahl) {
    if ($Zahl < 2) {
        return false;
    }

    $i = 2;

    do {
        $i += 1;
    }
    while ($Zahl % $i !== 0);
    
    if ($i === $Zahl) {print_r($Zahl." ist eine Primzahl\n");}
    else {print_r($Zahl."ist teilbar durch". $i . PHP_EOL );}

    return $i;
}

is_prime(25);


// $num = 42;
// $text = "Tschüss";
// $external = true;

// function test($num, $text) {
//     global $external;
//     print "Innerhalb der Funktion: \$num = $num und \$text = $text\n";
// }

// test(12, "Hallo");

// print "Außerhalb der Funktion: \$num = $num und \$text = $text\n";

// $num = 42;

// function test_func($num) {
//     $num = 13;
// }

// test_func($num);

// print $num . PHP_EOL;

// $num = 42;

// function test_func(&$peter) {
//     $peter = 13;
// }

// test_func($num);

// print $num . PHP_EOL;


$n1 = 42;
$n2 = &$n1;

print $n1 . PHP_EOL;

$n2 = 13;

print $n1 . PHP_EOL;



    ?>
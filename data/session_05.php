<?php
/**
 * $nums = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
 * 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
 * var_dump(array_reduce($nums,fn($c, $n)=>
 * ["a"=>$n>$c["a"]?$n:$c["a"],"b"=>$n<$c["b"]?$n:$c["b"],"c"
 * =>$c["c"]+$n/count($nums)],
 * ["a"=>$nums[0],"b"=>$nums[0],"c"=>0]));
 */

$nums = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$result = array_reduce(
    // Array, das wir verarbeiten
    $nums,
    
    // Verarbeitungsfunktion
    fn($c, $n) => [
        "max" => $n > $c["max"] ? $n : $c["max"],
        "min" => $n < $c["min"] ? $n : $c["min"],
        "avg" => $c["avg"] + $n / count($nums)
    ],
    
    // Startwert
    [
        "max" => $nums[0],
        "min" => $nums[0],
        "avg" => 0
    ]
);

// var_dump($result);

// Schwer verständlich, sehr verschachtelt, einfacher lesbar wäre wünschenswert
// Funktionsaufruf, Min/Max/Avg, Variablennamen schwer lesbar
// array_reduce = Kalkulation, Ergebnis ist ein einziger Wert
//   Frage: Woher kommen $c und $n?
// fn = Arrow-Funktion ( => ), anonyme Funktion



// Imperativer Code 

$input = [1, 2, 3, 4, 5, 6];

foreach ($input as $num => $value) {
    if ($num % 2 ===0) {$evenNumbers[] = $num;
    }
}

var_dump($evenNumbers);



// Deklarativer Code

function filter_even($num) {
    return $num % 2 === 0;
}

// Höherwertige Funktionen, funktionale Programmierung

$output1 = array_filter($input, "filter_even");

// Funktionsausdruck
$filter_even = function($num) {
    return $num % 2 === 0;
};

$output2 = array_filter($input, $filter_even);

$output3 = array_filter($input, function($num) { return $num % 2 === 0; });

$output4 = array_filter($input, fn($num) => $num % 2 === 0);

var_dump($output2);
var_dump($output3);
var_dump($output4)

?>
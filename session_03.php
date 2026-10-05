<?php


print PHP_EOL . "❓ Ist '$checkForPalindrome' ein Palindrom?" . PHP_EOL . PHP_EOL;
var_dump(
    strtolower($checkForPalindrome) === strrev(strtolower($checkForPalindrome))
);


function is_palindrome (string $word):bool {
    return
    strtolower($word) === strrev(strtolower($word));
    }
var_dump (is_palindrome("Ailia"));
var_dump (is_palindrome("Otto"));
var_dump (is_palindrome("Draw, o Coward!"));
readline("gib ein Wort ein, um zu prüfen, ob es ein Palindrom ist");
print "word" . PHP_EOL;

do {
    $word = readline("gib ein Wort ein, um zu prüfen, ob es ein Palindrom ist");
    var_dump(is_palindrome($word));
}
while (true);


function is_palindrome($word) {
    $wordLower = strtolower($word);
    $wordLettersOnly = str_replace([',', '!', ' ', '.'], "", $wordLower);
    
    return strrev($wordLettersOnly) === $wordLettersOnly;
}

function is_palindrome($word) {
    $wordLower = strtolower($word);
    $wordLettersOnly = preg_replace("/[^a-z]/", "", $wordLower);
    
    return strrev($wordLettersOnly) === $wordLettersOnly;
}

/*Schreib eine Funktion fizzbuzz(int $num) die bis zu einer Zahl $num ausgibt:

"fizz" falls die Zahl durch 3 teilbar ist
"buzz" falls die Zahl durch 5 teilbar ist
"fizzbuzz" falls sie durch 15 teilbar ist
die Zahl selbst in allen anderen Fällen*/

/* for schleife, teilbar durch: 3=fizz, 5=buzz, 15=fizzbuzz; 
%3,5,15 = false, else true, print true*/

function is_fizzbuzz(int $num){
    for ($i= $num +1;
    $i>0;
    $i--)
    {
        if ($i % 3 === 0){
            print"fizz";
            }
            if ($i % 5 === 0){
            print"buzz";
            }
    }
}
is_fizzbuzz(16);

/* als Array*/

function fizzbuzz(int $num): array {
    for ($i = 1; $i <= $num; $i++) {
        $text = $i;

        if ($i % 3 == 0) {
            $text = "fizz";
        }

        if ($i % 5 == 0) {
            $text = "buzz";
        }

        if ($i % 15 == 0) {
            $text = "fizzbuzz";
        }

        $ergebnis[] = $text;
    }
    return $ergebnis;
}
$ergebnis = fizzbuzz(20);
print_r($ergebnis);


/*Stephan*/
function fizzbuzz($num) {
	for ($i = 1; $i <= $num; $i++) {
		$isFizz = $i % 3 === 0;
		$isBuzz = $i % 5 === 0;
		$fizzBuzz = ($isFizz ? "fizz" : "") . ($isBuzz ? "buzz" : "");
		print (!empty($fizzBuzz) ? $fizzBuzz : $i) . PHP_EOL;
	}
}
fizzbuzz(20);

php -a -d auto_prepend_file=lib.php


//Arrays
$var = (5);
$arr = [5, Stephan, Max, Köln, true];
$arr2 = array (5, Stephan, Max, Köln, true);
var_dump (arr);

/*Element hinzufügen*/

$arr[] = 42;

print "Das Array hat " . count($arr) . " Elemente.";

array_push($arr, 13, false, "Hallo");
$arrToSort = [-5, 72, 12, 140, 67, -30]

var_dump($arr);
//Datenstruktur: last in, first out - das letzte was hinzugefügt wurde wird als erstes wieder herausgenommen.
   
   
 $arr = [5, "Peter", "Alina", "Köln", true, "Hallo"];
//      0  1        2        3       4     5

$index = 0;

while ($index < count($arr)) {
    var_dump($arr[$index]);
    $index++;
} 


//Mittelwert berechnen

$arr = [5, 42, 17, 13, -5, 145, 13.56, 0.2, 12];

$index = 0;
$size = count($arr);
$sum = 0; // Akkumulator, Akku, acc

while ($index < $size) {
    $sum = $sum + $arr[$index];
    $index++;
}

/*
=== Ablaufprotokoll ===

while:
    $index = 0, $sum = 0
        $sum = 0 + 5 = 5
        $index = 1
    
    $index = 1, $sum = 5
        $sum = 5 + 42 = 47
        $index = 2

    $index = 2, $sum = 47
        $sum = 47 + 17 = 64
        $index = 3
*/

print 'Durchschnitt von $arr: ' . ($sum/$size) . PHP_EOL;
   
// For-Schleife
$arr = [5, 42, 17, 13, -5, 145, 13.56, 0.2, 12];

$sum = 0;

for ($i=0; $i < count($arr); $i++) { 
    $sum = $sum + $arr[$i];
}

print 'Durchschnitt von $arr: ' . ($sum/count($arr)) . PHP_EOL;


   ?>
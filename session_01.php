<?php

// print "Hello, World!\n";

$text = "Hello, World!\n";

// print $text;

$number_of_people = 4; // Variablen, snake_case
define("PI", 3.14); // Konstanten

// var_dump(PI);

$number_of_people = 5;

// print "PI ist gleich = " . PI . "\n";
// print "PI ist gleich = " . PI . PHP_EOL;

/* Datentypen

Skalare
    - Numerisch (float, int)
    - Aphanumerisch (string)
    - Wahrheitswert (bool, Werte: true, false)
Nicht-skalare
    - Array (Liste)
    - null

(Konzepte:
    - Daten/Uhrzeiten (oft als integer umgesetzt)
    - Bilder/Grafiken/Dateien (binäre Daten)
    - Connections/Verbindung/Verknüpfung)
*/

// Zeichenketten/Strings

// print $text . PHP_EOL;

print 'Hello, World!\n

';

$name = "Andrea";
print "Hello, {$name}!\n";

// Übung: Eine Variable mit Text anlegen und prüfen, ob es sich dabei um ein Palindrm handelt (Otto, Anna, Maoam, Lagerregal)



$name = "anna";
$anna = true;

var_dump ($anna);
var_dump($name);

var_dump($name === strrev($name));

$checkForPalindrome = "Anna";

print PHP_EOL . "❓ Ist '$checkForPalindrome' ein Palindrom?" . PHP_EOL . PHP_EOL;
var_dump(
    strtolower($checkForPalindrome) === strrev(strtolower($checkForPalindrome))
);

$age = 33;

if ($age >=67) {print "Willkommen in der Rente";}

elseif ($age >= 18) {
    print "Yeah, Du bist Volljährig" . PHP_EOL;
print "Du kommst rein!";
}

else  { 
    print "Du kommst nicht rein!";
    }

    print PHP_EOL;

    $days_ago = "19";
    if ($days_ago <= 21 or $days_ago >= 14) {
    print "Willkommen in der Rente";
}
else {
    print "Du kommst hier nicht rein!";
}

print PHP_EOL;


$country = readline("Hauptstadt von: ");

// Imperativ

if ($country === "Niederlande") {
    print "Amsterdam" . PHP_EOL;
}
elseif ($country === "Deutschland") {
    print "Berlin" . PHP_EOL;
}
elseif ($country === "Costa Rica") {
    print "San Jose" . PHP_EOL;
}
elseif ($country === "USA") {
    print "Washington DC" . PHP_EOL;
}
else {
    print "Land nicht gefunden" . PHP_EOL;
}

// Deklarativ

switch ($country) {
    case "Niederlande":
        print "Amsterdam" . PHP_EOL;
        break;
    case "Deutschland":
        print "Berlin" . PHP_EOL;
        break;
    case "Costa Rica":
        print "San Jose" . PHP_EOL;
        break;
    case "USA":
        print "Washington DC" . PHP_EOL;
        break;
    default:
        print "Land nicht gefunden" . PHP_EOL;
}

// Deklarativ

$capital = match ($country) {
    "Niederlande" => "Amsterdam",
    "Deutschland" => "Berlin",
    "Costa Rica" => "San Jose",
    "USA" => "Washington DC",
    default => "Land nicht gefunden"
};

print $capital . PHP_EOL;

function capital($country) {
    $capital = match ($country) {
        "Niederlande" => "Amsterdam",
        "Deutschland" => "Berlin",
        "Costa Rica" => "San Jose",
        "USA" => "Washington DC",
        default => "Land nicht gefunden"
    };
    return $capital;
}

$country = readline("Hauptstadt von: ");
print capital($country) . PHP_EOL;


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



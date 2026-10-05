<?php

    <?php
/*Lennart:
- Generate random 5 letter word
$LWort = strtolower("Wort")
- Assign letters to array
$LArray = [w,o,r,t]
- Give readline 5 letter box (box as a countdown from 5)
$i = 5;
while ($i>0){$Input = [readline("Wort mit 5 Buchstaben")]\n, $i= $i-1;}
- Assign input to another array

- Check for correct letter
- Check for correct position
- Give output highlighting correct letters
- Give next readline input
*/


/*Anna
//*START "$word

versuche ← 0,   maximale
versuche ← 5
SOLANGE versuche < maximale_versuche

Eingabe tipp
WENN Länge von tipp ≠ 5
Ausgabe "Bitte 5 Buchstaben eingeben"
WEITER/ ENDE WENN

    versuche ← versuche + 1
    WENN tipp = lösungswort
        Ausgabe "Gewonnen!"
        STOP/ ENDE WENN

    FÜR jede Position von 1 bis 5
        WENN Buchstabe an dieser Position
             gleich dem Buchstaben im Lösungswort ist -> Ausgabe "Grün"
        
        SONST WENN Buchstabe im Lösungswort vorkomt -> Ausgabe "Gelb"
        
        SONSt -> Ausgabe "Grau -> ENDE WENN

    ENDE FÜR
    Ausgabe "Noch einmal versuchen"
   ENDE SOLANGE


  /* Andrea
/*array mit 5 Buchstaben-Variablen-Placeholdern anlegen
* täglich ein Wort hinterlegen - 365 worte hinterlegen
* Do-Schleife - 6 Durchgänge
* if richtiger Buchstabe, richtige Location, then green
* if richtiger Buchstabe, falsche Location, then amber
* else grey*/


$var = (5);
$arr = [$l1, $l2, $l3, $l4, $l5];
// $arr = [A, L, I, V, E];
var_dump (arr);


$words = file("./data/words.txt");

// ein zufälliges Wort aus $words
// $key = array_rand($words); // key ist in diesem Fall eine Zahl
// $targetWord = $words[$key]; // Nachschlagen an Stelle key gibt uns ein Wort

// $targetWord = $words[random_int(0, array_key_last($words))];

$targetWord = trim(strtolower($words[rand(0, count($words)-1)]));

define("MAX_TRIES", 6);
$try = 1;

print <<<EOT
\n=====================================
=======   Welcome to WORDLE   =======
=====================================\n

EOT;

do {
    $input = readline("Versuch {$try}/" . MAX_TRIES . ". Wort mit 5 Buchstaben: ");
    $success = true;

    if (strlen($input) !== 5) {
        print "Bitte 5 Buchstaben eingeben!\n";
        continue;
    }

    for ($i = 0; $i < 5; $i++) {
        // Buchstabe identisch => 🟢
        if ($input[$i] === $targetWord[$i]) {
            print "🟢";
            continue;
        }

        $success = false;

        if (str_contains($targetWord, $input[$i])) {
            print "🟡";
            continue;
        }

        // Buchstabe nicht identisch UND nicht im Wort enthalten => ⚫
        print "⚫";
    }

    print PHP_EOL;

    $try++;
} while (!$success and $try <= MAX_TRIES);

if (!$success) {
    print <<<EOT
=======================================
=== Too bad! The word was '$targetWord'. ===
=======================================

EOT;
}
else {
    print <<<EOT
=====================================
=======   Congratulations!!   =======
=====================================

EOT;
}



$words = file("./data/words.txt");

// ein zufälliges Wort aus $words
// $key = array_rand($words); // key ist in diesem Fall eine Zahl
// $targetWord = $words[$key]; // Nachschlagen an Stelle key gibt uns ein Wort

// $targetWord = $words[random_int(0, array_key_last($words))];

$targetWord = trim($words[rand(0, count($words)-1)]);

define("MAX_TRIES", 6);
define("NUM_OF_LETTERS", 5);
$try = 1;

print <<<EOT
\n=====================================
=======   Welcome to WORDLE   =======
=====================================\n

EOT;

do {
    $input = readline("Versuch {$try}/" . MAX_TRIES . ". Wort mit " . NUM_OF_LETTERS . " Buchstaben: ");
    $success = true;

    if (strlen($input) !== NUM_OF_LETTERS) {
        print "Bitte " . NUM_OF_LETTERS . " Buchstaben eingeben!\n";
        continue;
    }

    for ($i = 0; $i < NUM_OF_LETTERS; $i++) {
        // Buchstabe identisch
        if (strtolower($input[$i]) === strtolower($targetWord[$i])) {
            print "\e[1;37;46m $input[$i] \e[0m ";
            continue;
        }

        $success = false;

        if (str_contains($targetWord, $input[$i])) {
            print "\e[1;37;45m $input[$i] \e[0m ";
            continue;
        }

        // Buchstabe nicht identisch UND nicht im Wort enthalten
        print "\e[1;37;47m $input[$i] \e[0m ";
    }

    print PHP_EOL;

    $try++;
} while (!$success and $try <= MAX_TRIES);

if (!$success) {
    print <<<EOT
=======================================
=== Too bad! The word was '$targetWord'. ===
=======================================

EOT;
}
else {
    print <<<EOT
=====================================
=======   Congratulations!!   =======
=====================================

EOT;
}

function remove_letter(string &$word, string $letter) {
    $word = preg_replace("/$letter/", "", $word, 1);
}

$words = file("./data/words.txt");

// ein zufälliges Wort aus $words
// $key = array_rand($words); // key ist in diesem Fall eine Zahl
// $targetWord = $words[$key]; // Nachschlagen an Stelle key gibt uns ein Wort

// $targetWord = $words[random_int(0, array_key_last($words))];

$targetWord = strtolower(trim($words[rand(0, count($words)-1)]));

define("MAX_TRIES", 6);
define("NUM_OF_LETTERS", 5);
$try = 1;

print <<<EOT
\n=====================================
=======   Welcome to WORDLE   =======
=====================================\n

EOT;

do {
    $input = strtolower(readline("Versuch {$try}/" . MAX_TRIES . ". Wort mit " . NUM_OF_LETTERS . " Buchstaben: "));
    // Hilfsvariable zum Kaputtmachen
    $lookup = $targetWord; // z.B. "stern"
    $success = true;

    if (strlen($input) !== NUM_OF_LETTERS) {
        print "Bitte " . NUM_OF_LETTERS . " Buchstaben eingeben!\n";
        continue;
    }

    for ($i = 0; $i < NUM_OF_LETTERS; $i++) {
        // Buchstabe identisch
        if ($input[$i] === $targetWord[$i]) {
            print "\e[1;37;46m $input[$i] \e[0m ";
            remove_letter($lookup, $input[$i]);
            continue;
        }

        $success = false;

        if (str_contains($lookup, $input[$i])) {
            print "\e[1;37;45m $input[$i] \e[0m ";
            remove_letter($lookup, $input[$i]);
            continue;
        }

        // Buchstabe nicht identisch UND nicht im Wort enthalten
        print "\e[1;37;47m $input[$i] \e[0m ";
    }

    print PHP_EOL;

    $try++;
} while (!$success and $try <= MAX_TRIES);

if (!$success) {
    print <<<EOT
=======================================
=== Too bad! The word was '$targetWord'. ===
=======================================

EOT;
}
else {
    print <<<EOT
=====================================
=======   Congratulations!!   =======
=====================================

EOT;
}

/*

S T E R N

L A T T E

⚫⚫🟡⚫🟡

---

S T A R T

L A T T E

⚫🟡🟡🟡⚫

*/
?>
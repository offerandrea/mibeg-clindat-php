<?php

require_once("lib.php");

// $arr = [5, 42, 17, 13, -5, 145, 13.56, 0.2, 12];

$potentialPalindromes = [
    "Sit on a potato pan, Otis!",
    "Ein Sachse mit Gazelle sagt im Regen nie.",
    "Swap God for a janitor; rot in a jar of dog paws.",
    "Anna hetzte Hanna.",
    "Bananarama",
    "Reib, Tim, eine Brandnarbe nie mit Bier!",
    "Leg Raps ein, nie Spargel."
];

foreach ($potentialPalindromes as $p) {
    print (is_palindrome($p) ? "✅ " : "❌ ") . $p . PHP_EOL;
}
?>
<?php
// Définition de la fonction swap
function echange(&$a, &$b) {
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}

$x = 5;
$y = 10;

echange($x, $y);

echo "x = $x, y = $y"; // Affichera : x = 10, y = 5
?>

<?php
// Fonction qui répète "woof" $n fois
function woof_repeat($n) {
    $result = ""; // Initialisation de la chaîne résultat
    for ($i = 0; $i < $n; $i++) {
        $result .= "woof"; // Concatène "woof" à chaque itération
    }
    return $result; // Retourne la chaîne finale
}

// Exemple d'utilisation
echo woof_repeat(3); // Affichera : woofwoofwoof
?>

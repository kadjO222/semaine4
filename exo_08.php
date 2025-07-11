<?php
// Fonction qui affiche chaque valeur d'un tableau sur une nouvelle ligne
function print_array($arr) {
    foreach ($arr as $value) {
        echo $value . "<br>";
    }
}

// Exemple d'utilisation
$mon_tableau = ["pomme", "banane", "cerise"];
print_array($mon_tableau);
?>

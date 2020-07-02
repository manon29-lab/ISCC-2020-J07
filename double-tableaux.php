<?php

$panier = array (
array ("T-shirt rouge", 15.50, 5),
array ("T-shirt vert", 15.50, 6),
array ("T-shirt argent", 15.50, 8),
array ("Short bleu", 16.50, 5),
array ("Short vert", 19.99, 5),
array("Veste argent", 19.99,10),
array ("Veste marron", 35, 3),
) ;


function afficher_panier ($panier) {
foreach ($panier as $value) {
echo "<ul>";
foreach ($value as $listepanier) {
echo "<li> $listepanier </li>";
}
echo "</ul>";
}
}

afficher_panier($panier);

function calculer_total_panier($panier) {

    $prix = 0;
    $total = 0;
    foreach ($panier as $element) {
        $prix = ($element [1] * $element [2]);
        $total = ($prix + $total);
    }
    return ($total);
}
echo (calculer_total_panier($panier));
?>

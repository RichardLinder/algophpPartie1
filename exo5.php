<h1> Exercice 5 </h1>

<!-- énoncé -->
<P>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.<br>
 Attention, la valeur générée devra être arrondie à 2 décimales.</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php


// Valeru en franc

$franc =  100;

$euroFranc = 0.152449 * $franc;
$euro = round($euroFranc,2);

// affichase du reultat

echo "Montant en francs: $franc";
echo "<br>";
// echo "$euroFranc";

echo "$franc francs = $euro €";
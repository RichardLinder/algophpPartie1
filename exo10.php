<h1> Exercice 10 </h1>

<!-- énoncé -->
<P>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui<br>
 affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php
$dix=0;
$cinq=0;
$deux=0;
$prix=152;
$versé=200;
$rendu= $versé-$prix;

division entière*******************************************************************************************************************************************************************

$reste= $rendu;



$dix== $reste % 10;

$reste== $rendu-(10*$dix);

$cinq==$reste%5;
$reste== $rendu-(5-$cinq);

$deux==$reste%2;
$reste== $rendu-(2*$deux);

echo "Montant à payer : $prix €<br>;";
echo "Montant versé : $versé €<br>;";
echo "à rendre  :$rendu  €<br>;";
echo "Rendue de monnaie :<br>;";
echo "$dix billets de 10 € $cinq billet de 5 € $deux pièce de 2 € $reste pièce de 1 €";
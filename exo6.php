<h1> Exercice 6</h1>

<!-- énoncé -->
<P>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité <br>
    d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php

$quantité = 5;

$prix=9.99 ;

$tva= .2;

$prixHT =$quantité*$prix;
$prixTTC = $prixHT*$tva;


echo "Prix unitaire de l’article: $prix €";

echo"<br>";

echo"Quantité: $qantité ";

echo"<br>";
echo"Taux de TVA: $prixHT €";

echo"<br>";

echo" Le montant de la facture à régler est de : $prixTTC €";
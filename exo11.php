<h1> Exercice 11 </h1>

<!-- énoncé -->
<P>Initialiser  un  tableau  de  x  marques  de  voitures.  Ecrire  un  algorithme permettant  de  parcourir ce<br>
 tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé<br>
 d’afficher le nombre de marques de voitures présentes dans le tableau.</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php

$marque =["Peugeot","Renault","BMW","Mercedes"];

echo "Il y a ".count($marque)." marques de voitures dans le tableau:";

?><ul><?php
foreach ($marque as $key) {
    echo "<li>".$key."</li>";
}

?></ul><php?
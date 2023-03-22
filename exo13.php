<h1> Exercice 13 </h1>

<!-- énoncé -->
<P>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de<br>
coefficient). Elle devra être affichée avec 2 décimales.</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php

$tableauNote=[10, 12, 8, 19, 3, 16, 11, 13, 9];
$moyen = array_sum($tableauNote)/count($tableauNote);


?>Les notes obtenues par l’élève sont: <?php 
foreach ($tableauNote as $key) {
    echo "$key"." ";
}
?> Sa moyenne générale est donc de: <?php
echo round($moyen,2);
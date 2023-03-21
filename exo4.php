<h1> Exercice 4</h1>

<!-- énoncé -->
<P>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</P>
<!--resultat -->
<h2>Resultat</h2>
<?php

$textTest="Engage le jeu que je le gagne";

// mettre en minuscule
$minuscule = strtolower($textTest);
// suprimé les espace
$sansEspace =  str_replace(" ","",$minuscule);

//inversé
$resultat = strrev($sansEspace); 


//Testé
if($sansEspace===$resultat){
     $affichageResulta="Le text es bien un palindrome";


    }
    else {
        $affichageResulta="Le text n'es pas un palindrome";
    }

echo "$affichageResulta";
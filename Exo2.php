<!-- titre  -->
<h1> Exercice  1</h1>

<!-- énoncé -->
<P>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots<br> contenus dans celle-ci.</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php 
$Textteste = "Notre formation DL commence aujourd’hui";
$LongeurTexte =str_word_count($Textteste);
echo "La phrase \"$Textteste\" contient $LongeurTexte Mots.";
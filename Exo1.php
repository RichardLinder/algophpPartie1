<!-- titre  -->
<h1> Exercice  1</h1>

<!-- énoncé -->
<P>Soit la phrase «Notre formation DL commence aujourd'hui». <br>
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase<br>
(espaces inclus).</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php 
$Textteste = "Notre formation DL commence aujourd’hui";
$LongeurTexte = strlen($Textteste);
echo "La phrase \"$Textteste\" contient $LongeurTexte caractères.";
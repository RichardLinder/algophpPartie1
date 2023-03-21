<!-- titre  -->
<h1> Exercice 3</h1>

<!-- énoncé -->
<P>SA  partir  de  la  phrase  de  l’exercice  1,  écrire  l’instruction  permettant  de  remplacer  le  mot<br>
«aujourd’hui» par le mot «demain». Afficher l’ancienne et la nouvelle phrase.</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php 
$textTeste = "Notre formation DL commence aujourd’hui";

$resultat = str_replace("aujourd’hui","demain",$textTeste);

echo $textTeste;
echo "<br>";
echo $resultat;
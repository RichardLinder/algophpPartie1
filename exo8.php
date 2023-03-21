<h1> Exercice 8</h1>

<!-- énoncé -->
<P>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme:</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php 

$nombre = 8;





echo "Table de $nombre";
echo "<br> <ul>";
for ($i=0; $i <11 ; $i++) { 
    echo "<li>";
    $value = $nombre *$i;
    echo "$i"."X".$nombre." "."=".$value." "."</li>";
}
echo "</ul>";


for ($i=0; $i <11 ; $i++) ;


$i=0;
while ($i<11) { 
    echo "<li>";
    $value = $nombre *$i;
    echo "$i"."X".$nombre." "."=".$value." "."</li>";
    $i++;
}
echo "</ul>";
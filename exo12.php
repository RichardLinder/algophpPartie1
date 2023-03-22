<h1> Exercice 12</h1>

<!-- énoncé -->
<P>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée<br>
(tableau  contenant  clé  et  valeur),  dire  bonjour  aux  différentes  personnes  dans  leur  langue<br>
respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)<br>
Exemple: tableau ➔Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php
$client=["Mickaël" => "FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG"];

foreach ($client as $key => $value) {
    echo"$key"." ";
    switch ($value) {

        case 'FRA':
            echo "salut";
            break;
        case 'ESP':
            echo "hola";
            break;
        
        case 'ENG':
            echo "hello";
            break;
        default:
            echo "salut";
            break;
    }
    echo"<br>";
}
<h1> Exercice 9 </h1>

<!-- énoncé -->
<P>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br>
    Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans,<br>
     alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable»).</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php
$sexe ="H";

$age = "5";



if($sexe==="H"&&$age>20 || $sexe==="F"&&$age>35&&$age<18){
    echo "Age: $age Sexe: $sexe La personne est imposable.";
}else {
    echo  "Age: $age Sexe: $sexe La personne n'est pas imposable.";
}
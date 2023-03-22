<h1> Exercice 7 </h1>

<!-- énoncé -->
<P>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge:<br>
    Poussin: entre 6 et 7 ans<br>
    Pupille: entre 8 et 9 ans<br>
    Minime: entre 10 et 11 ans<br>
    Cadet: à partir de 12 ans<br>
    Si la catégorie n’est pas gérée, merci de le préciser.</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php 
$age = 55;

if ($age<6) {
    echo "la catégorie n’est pas gérée";  
}elseif ($age>10) {
    echo "L’enfant qui a $age ans appartient à la catégorie « Minime »";
}elseif ($age>8) {
    echo " L’enfant qui a $age ans appartient à la catégorie « Puppile »";
}else {
    echo "L’enfant qui a $age ans appartient à la catégorie « poussin »";
}



/*

switch ($age) {
    case '6':
        echo "L’enfant qui a $age ans appartient à la catégorie « poussin »";
        break;
        case '7':
            echo "L’enfant qui a $age ans appartient à la catégorie « poussin »";
            break;
        case '8':
           echo " L’enfant qui a $age ans appartient à la catégorie « Puppile »";
        break;
        case '9':
           echo " L’enfant qui a $age ans appartient à la catégorie « Puppile »";
        break;
        case '10':
            echo "L’enfant qui a $age ans appartient à la catégorie « Minime »";
        break;
        case '11':
            echo "L’enfant qui a $age ans appartient à la catégorie « Minime »";
        break;

    default:
    if ($age>12) {
        echo" L’enfant qui a $age ans appartient à la catégorie « cadet»";
    }else {
        echo "la catégorie n’est pas gérée";
    }
        
        break;
}
*/
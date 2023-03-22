<h1> Exercice 14</h1>

<!-- énoncé -->
<P>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</P>
<!--resultat -->
<h2>Resultat</h2>
<!-- balise php -->
<?php
$date1 = new DateTime("1985-01-17");
$date2 = new DateTime("2018-05-21");
$interval = $date1->diff($date2);



?>Si la date courante est le <?php echo $date1->format('Y/m/d');?> et la date de naissance le<?php echo $date2->format('Y/m/d');?>
:Age de la personne: <?php echo   $interval->format('%y')." ans ".$interval->format('%m')." mois ".$interval->format('%d')." jour ";
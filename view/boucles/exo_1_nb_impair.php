<?php
$titre = "exercice boucle php 1 : nombres impairs entre 0 et 150";
include ($_SERVER['DOCUMENT_ROOT'])."/view/header.php";
include ($_SERVER['DOCUMENT_ROOT'])."/controller/boucles/exo1controller.php";
?>
<a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_03_Boucles.html" title="Lien vers les consignes de l'exercice">Lien vers l'énoncé de l'exercice</a>

<h1>Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...</h1>
<div>Nombres premier :</div>
<?php
for($a=0; $a<=150; $a++)
{
if($a%2!=0)
{ ?>
    <span> <?= $a ?> - </span>
<?php
}
};
?>
<?php
include ($_SERVER['DOCUMENT_ROOT'])."/view/footer.php";
?>
<?php
$titre = "les fonctions - exercice 2";
include ($_SERVER['DOCUMENT_ROOT'])."/controller/fonctions/fonction_php_exo_2_controller.php";
include ($_SERVER['DOCUMENT_ROOT'])."/view/header.php";
?>
<h1>Ecrivez une fonction qui calcul la somme des valeurs d'un tableau</h1>
<a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_05_Fonctions.html" title="Enoncé de l'exercice">Enoncé de l'exercice</a>

<?php $somme2=calculSomme($tab2); ?>
<?= $somme2 ?>




















<?php
include ($_SERVER['DOCUMENT_ROOT'])."/view/footer.php";
?>

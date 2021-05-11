<?php
$titre = "exo 2 php 500 lignes";
//include ($_SERVER['DOCUMENT_ROOT'])."/view/header.php";
//include ($_SERVER['DOCUMENT_ROOT'])."/controller/boucles/exo2controller.php";
include "./view/header.php";
include "./controller/boucles/exo2controller.php";
?>
<h1>Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers</h1>
<a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_03_Boucles.html" title="lien de l'énoncé de l'exercice 2">Lien de l'exercice</a>
<?php
for($i=1; $i<=500; $i++){
    ?>
<p>Je dois faire des sauvegardes régulières de mes fichiers sinon quand OVH crâme je suis dans la merde parce que j'ai pas fait de backup</p>
<?php } ?>
<?php
//include ($_SERVER['DOCUMENT_ROOT'])."/view/footer.php";
include "./view/footer.php";
?>
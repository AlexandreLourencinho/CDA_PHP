<?php
$titre = "Les fonctions - php - exercice 1";
include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/controller/fonctions/fonctions_php_exo_1_controller.php";
?>
<h1>Ecrivez une fonction qui permette de générer un lien.</h1>
<a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_05_Fonctions.html" title="Lien de l'énoncé">Lien
        de l'énoncé</a>
<p>voici le code de la fonction utilisée ici :</p>
<code><p>function faireLien($lien, $libelle){ ?></p>
    <p>< a href="< ?= $lien ?>"><*?= $libelle ?> < /a></p>
    <p>< ?php } ?></p></code>
<?php faireLien("https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_05_Fonctions.html", "exo ncode"); ?>
<p>voici le code de la fonction utilisée ici :</p>
<code><p>function faireLien($debut , $fin){</p>
    <p>echo $debut.$fin ;}</p></code>
    <?php faireLienDeux("https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_05_Fonctions.html", "exo ncode2") ?>

<?php
//var_dump($tablo);
foreach ($tablo as $lib=>$link) { ?>
<a href="<?= $link ?>"> <?= $lib ?> </a>

<?php }; ?>




<?php

include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php";
?>

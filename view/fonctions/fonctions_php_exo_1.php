<?php
$titre = "Les fonctions - php - exercice 1";
//include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php";
//include $_SERVER['DOCUMENT_ROOT'] . "/controller/fonctions/fonctions_php_exo_1_controller.php";
include "./view/header.php";
include "./controller/fonctions/fonctions_php_exo_1_controller.php";
?>
<h1>Ecrivez une fonction qui permette de générer un lien.</h1>
<a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_05_Fonctions.html" title="Lien de l'énoncé">Lien
    de l'énoncé</a>
<p>voici le code de la fonction utilisée ici :</p>
<code><p>function faireLien($lien, $libelle){ ?></p>
    <p>< a href="< ?= $lien ?>"><*?= $libelle ?> < /a></p>
    <p>< ?php } ?></p></code>
<span>pour ce lien :</span><?php faireLien("https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_05_Fonctions.html", "exo ncode"); ?>
<p>
    voici le code de la fonction utilisée ici :
</p>
<code>
    <p>function fairelien3($libelle3, $lien3){</p>
    <p>$tablo=array($libelle3=>$lien3);</p>
    <p>return $tablo;
        }</p>
    <p>$tablo1=fairelien3("exo
        fonction","https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_04_Tableaux.html") ;</p>
    <p>< ?php
        foreach ($tablo1 as $lib => $link) { ? ></p>
    <p>< a href="< ?= $link ?>"> < ?= $lib ? > </ a></p>
    <p>< ?php }; ? ></p>
</code>
<span> pour ce lien :</span>
<?php
foreach ($tablo1 as $lib => $link) { ?>
    <a href="<?= $link ?>"> <?= $lib ?> </a>
<?php }; ?>




<?php
//include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php";
include "./view/footer.php";
?>

<?php
$mien = 0;
$mibelle = 0;
$lien=0;
$mibelle=0;
$tablo = array();
?>
<?php
function faireLien(string $lien, string $libelle)
{
    ?>
    <a href="<?= $lien ?>"><?= $libelle ?> </a>
<?php } ?>

    <!--OU-->
<?php

function fairelien3(string $libelle3, string $lien3):array{
    $tablo=array($libelle3=>$lien3);
    return $tablo;
}
$tablo1=fairelien3("exo fonction","https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_04_Tableaux.html") ;
?>

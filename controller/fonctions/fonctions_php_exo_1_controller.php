<?php
$mien = 0;
$mibelle = 0;
$lien=0;
$mibelle=0;
$tablo = array();
?>
<?php
function faireLien($lien, $libelle)
{
    ?>
    <a href="<?= $lien ?>"><?= $libelle ?> </a>
<?php } ?>

    <!--OU-->
<?php
function faireLienDeux($lien2, $libelle2)
{
    echo "<a href='$lien2'> $libelle2</a>";
}
;
function fairelien3($libelle3, $lien3){
    $tablo=array($libelle3=>$lien3);
    return $tablo;
}
$tablo=fairelien3("exo fonction","https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_04_Tableaux.html") ;
?>

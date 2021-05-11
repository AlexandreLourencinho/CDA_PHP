<?php
$titre = "exercice 3 php - les boucles";
//include ($_SERVER['DOCUMENT_ROOT'])."/view/header.php";
//include ($_SERVER['DOCUMENT_ROOT'])."/controller/boucles/exo3controller.php";
include "./view/headers_et_footer/header.php";
include "./controller/exos_php_controllers/boucles/exo3controller.php";
?>
<h1> Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML  </h1>
<br>
<a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_03_Boucles.html" title="lien vers les consignes de l'exercice"> lien de l'exercice</a>
<br>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-dark table-hover col-12 col-lg-4">
        <thead>
        <tr>
            <th>

            </th>
            <?php
            for( $u=0; $u<=12; $u++)
            { ?>
                <th> <?= $u; ?></th>
            <?php } ?>
            </tr>
            </thead>
            <tbody>
        <?php
        for($z=0;$z<=12;$z++)
        {
            ?>

            <tr>
                <th scope="row">
                    <?= $z; ?>

                </th>
                <?php
                for( $b=0; $b<=12; $b++)
                { ?>
                    <td>
                        <?= $z*$b ?>
                    </td>
                <?php } ?>
            </tr>
            </tbody>
        <?php } ?>
    </table>
</div>
<?php
//include ($_SERVER['DOCUMENT_ROOT'])."/view/footer.php";
include "./view/headers_et_footer/footer.php";
?>
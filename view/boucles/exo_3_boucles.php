<?php
$titre = "exercice 3 php - les boucles";
include "view/header.php";
include "controller/boucles/exo3controller.php";
?>
<h1> Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12} dans un tableau HTML  </h1>
<br>
<a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_03_Boucles.html" title="lien vers les consignes de l'exercice"> lien de l'exercice</a>
<br>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-dark table-hover col-12 col-lg-4">
        <tr>
            <thead>
            <th>

            </th>
            <?php
            for( $u=1; $u<=12; $u++)
            { ?>
                <th> <?= $u; ?></th>
            <?php } ?>
            </tr>
            </thead>
            <tbody>
        <?php
        for($z=1;$z<=12;$z++)
        {
            ?>

            <tr>
                <th scope="row">
                    <?= $z; ?>

                </th>
                <?php
                for( $b=1; $b<=12; $b++)
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
include "view/footer.php"; ?>
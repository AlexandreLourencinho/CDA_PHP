<?php
$titre = "php - exercice 1 les tableaux";
include "view/header.php";
include "controller/tableaux/exo_1_php_tableau_controller.php";
?>
    <h1></h1>
    <a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_04_Tableaux.html"
       title="Le lien vers l'énoncé">Lien vers l'énoncé de l'exercice</a>
<div class="d-flex flex-row justify-content-start">
<div class="table-responsive col-2">
    <table class=" table table-bordered table-dark col-1">
        <thead>
        <tr>

<?php foreach ($tableaumois as $mois=>$nombreJours) { ?>
            <th>
                <?= $mois ?>
            </th>
    <td> <?= $nombreJours ?></td>
        </tr>
        <?php } ?>

        </thead>
    </table>
</div>
    <div class="table-responsive">
        <table class=" table table-bordered table-dark col-1">
            <thead>
<?php
arsort($tableaumois);
foreach ($tableaumois as $mois=>$nombreJours) { ?>
            <tr>
                <th>
                        <?= $mois ?>
                    </th> <td> <?= $nombreJours ?> </td></tr>
                <?php } ?>
            </thead>
        </table>
    </div>
</div>
<?php
include "view/footer.php";
?>
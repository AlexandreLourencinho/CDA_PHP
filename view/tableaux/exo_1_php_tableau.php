<?php
$titre = "php - exercice 1 les tableaux";
include "view/header.php";
include "controller/tableaux/exo_1_php_tableau_controller.php";
?>
    <h1></h1>
    <a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_04_Tableaux.html"
       title="Le lien vers l'énoncé">Lien vers l'énoncé de l'exercice</a>
<div class="table-responsive">
    <table class=" table table-bordered table-dark col-6">
        <thead>
        <tr>

<?php foreach ($tableaumois as $mois=>$nombreJours) { ?>
            <th>
                <?= $mois ?>
            </th>
        <?php } ?>
        </tr>
        </thead>
        <tbody>
        <tr>
        <?php
        foreach ($tableaumois as $mois=>$nombreJours){
            ?>
            <td> <?= $nombreJours ?> </td>
        <?php } ?>


        </tr>
        </tbody>
    </table>
</div>
    <div class="table-responsive">
        <table class=" table table-bordered table-dark col-6">
            <thead>
            <tr>
<?php
arsort($tableaumois);
foreach ($tableaumois as $mois=>$nombreJours) { ?>
                    <th>
                        <?= $mois ?>
                    </th>
                <?php } ?>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                foreach ($tableaumois as $mois=>$nombreJours){
                    ?>
                    <td> <?= $nombreJours ?> </td>
                <?php } ?>


            </tr>
            </tbody>
        </table>
    </div>



<?php
include "view/footer.php";
?>
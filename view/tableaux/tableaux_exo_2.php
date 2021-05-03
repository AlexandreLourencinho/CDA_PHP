<?php
$titre = "tableaux exercice 2 : capitales";
include "view/header.php";
include "controller/tableaux/tableaux_exo_2_controller.php";
?>

<div class="d-flex flex-row justify-content-start">
    <span class="h5"> premier tableau</span>
    <div class="table-responsive col-2 p-0">
        <table class=" table table-bordered table-dark col-3">
                <?php
                ksort($capitales);
                foreach ($capitales as $ville => $pays) {
                    ?>
                <tr>
                    <th><?= $ville ?></th>
                    <td><?= $pays ?></td>
                </tr>
                <?php } ?>
        </table>
    </div>
    <span class="h5">Deuxième tableau</span>
    <div class="table-responsive col-3 p-0">
    <table class=" table table-bordered table-dark col-3">
        <thead>

            <?php
            asort($capitales);
            foreach ($capitales as $ville => $pays) {
                ?>
                <tr>
                <th><?= $pays ?></th>
                <td><?= $ville ?></td>
        </tr>
            <?php } ?>
        </thead>
    </table>
    </div>
    <?php
    $nombre=count($capitales)
    ?>
    <p>Il y a <?= $nombre ?> villes.</p>
</div>

<?php
include "view/footer.php";
?>
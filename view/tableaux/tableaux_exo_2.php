<?php
$titre = "tableaux exercice 2 : capitales";
include "view/header.php";
include "controller/tableaux/tableaux_exo_2_controller.php";
?>

    <div class="d-flex flex-row justify-content-start">
        <span class="h5"> premier tableau</span>
        <div class="table-responsive col-2 p-0">
            <table class=" table table-bordered table-dark col-3">
                <thead>
                <tr>
                    <th>Ville</th>
                    <th>Pays</th>
                </tr>
                </thead>
                <tbody>
                <?php
                ksort($capitales);
                foreach ($capitales as $ville => $pays) {
                    ?>
                    <tr>
                        <td><?= $ville ?></td>
                        <td><?= $pays ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <span class="h5">Deuxième tableau</span>
        <div class="table-responsive col-3 p-0">
            <table class=" table table-bordered table-dark col-3">
                <thead>
                <tr>
                    <th>Pays</th>
                    <th>Ville</th>
                </tr>
                </thead>
                <tbody>
                <?php
                asort($capitales);
                foreach ($capitales as $ville => $pays) {
                    ?>
                    <tr>
                        <td><?= $pays ?></td>
                        <td><?= $ville ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <?php
        $nombre = count($capitales)
        ?>
        <p>Il y a <?= $nombre ?> villes.</p>
    </div>

<?php
include "view/footer.php";
?>
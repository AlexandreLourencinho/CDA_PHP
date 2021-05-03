<?php
$titre = "tableaux exercice 2 : capitales";
include "view/header.php";
include "controller/tableaux/tableaux_exo_2_controller.php";
?>
    <div class="table-responsive">
        <table class=" table table-bordered table-dark col-4">
            <thead>
            <tr>
                <?php
                ksort($capitales);
                foreach ($capitales as $ville => $pays) {
                    ?>
                    <th>
                        <?= $ville ?>
                    </th>
                <?php } ?></tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach ($capitales as $ville => $pays) { ?>

                    <td><?= $pays ?></td>


                <?php } ?></tr>
            </tbody>

        </table>
    </div>
    <div class="table-responsive">
    <table class=" table table-bordered table-dark col-4">
        <thead>
        <tr>
            <?php
            asort($capitales);
            foreach ($capitales as $ville => $pays) {
                ?>
                <th>
                    <?= $pays ?>
                </th>
            <?php } ?></tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($capitales as $ville => $pays) { ?>

                <td><?= $ville ?></td>


            <?php } ?></tr>
        </tbody>
    </table>




<?php
include "view/footer.php";
?>
<?php
$titre = "exercice 3 php sur les tableaux";
include ($_SERVER['DOCUMENT_ROOT'])."/view/header.php";
include ($_SERVER['DOCUMENT_ROOT'])."/controller/tableaux/exo_3_tableaux_controller.php";
?>
    <h1>1) Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements</h1>
    <h1>2)Affichez la liste des régions suivie du nombre de départements</h1>
    <a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_04_Tableaux.html"
       title="énoncé de l'exercice">Enoncé de l'exercice</a>
    <div class="table-responsive">
        <table class="table table-bordered table-dark">
            <thead>
            <tr>
                <th>Région</th>
                <th>Départements</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($departements as $region => $dpt) {
                ?>
                <tr>
                    <td><?= $region ?></td>
                    <td>
                        <?php
                        foreach ($dpt as $key => $rdpt) {
                            echo $rdpt;
                            ?>
                            -
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
<?php
include ($_SERVER['DOCUMENT_ROOT'])."/view/footer.php";
?>
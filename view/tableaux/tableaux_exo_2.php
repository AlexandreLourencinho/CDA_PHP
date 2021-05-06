<?php
$titre = "tableaux exercice 2 : capitales";
include ($_SERVER['DOCUMENT_ROOT'])."/view/header.php";
include ($_SERVER['DOCUMENT_ROOT'])."/controller/tableaux/tableaux_exo_2_controller.php";
?>
<p class="h3">1) Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.</p>
<p class="h3">2) Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.</p>
<p class="h3">3) Affichez le nombre de pays dans le tableau.</p>
<p class="h3">4) Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau.</p>
<a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_04_Tableaux.html" title ="lien vers l'énoncé de l'exercice">Lien vers l'énoncé de l'exercice</a>
    <div class="d-flex flex-row justify-content-start">
        <span class="h5">1) premier tableau</span>
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
        <span class="h5">2) Deuxième tableau</span>
        <div class="table-responsive col-2 p-0">
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
        <span><b>3) Il y a <?= $nombre ?> villes.</b></span>

<?php
foreach ($capitales as $ville=>$pays) {
    if(!preg_match("#^B#", $ville)){
        unset($capitales[$ville]);
    }
} ?>
<span><b>4) troisième tableau : Villes commençant par B supprimées</b></span>
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
    </div>
<?php
include ($_SERVER['DOCUMENT_ROOT'])."/view/footer.php";
?>
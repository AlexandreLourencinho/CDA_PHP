<?php
$titre = "manip fichiers - exo 1";
//include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php";
//include $_SERVER['DOCUMENT_ROOT'] . "/controller/manip_fichiers/php_manip_fichiers_exo_1_controller.php";
include "./view/header.php";
include "./controller/manip_fichiers/php_manip_fichiers_exo_1_controller.php";
?>
<h4><u><b>Exercices :
            Lecture d'un fichier.
            Téléchargez le fichier, il contient une liste de sites indispensables à la compréhension du monde moderne.

            Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens
            hypertextes.</b></u></h4>
<a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_Fichiers.html" title="Enoncé de l'exercice">
    Enoncé de l'exercice</a>
<p>Liste de liens :</p>
<ul>
    <?php
    foreach ($tabliens as $liens) {
        $compteur++;
        if (preg_match("#//www.#", $liens)) {
            $longueur = strpos($liens, '.org') - strpos($liens, 'w.');
            $nom = substr($liens, strpos($liens, 'w.') + 2, $longueur - 2);
        } elseif (preg_match("#//fr.#", $liens)) {
            $positiondebut = strpos($liens, 'r.');
            $longueur = strpos($liens, '.org') - $positiondebut;
            $nom = substr($liens, $positiondebut + 2, $longueur - 2);
        } elseif (preg_match("#://t#", $liens)) {
            $positiondebut = strpos($liens, '//');
            $longueur = strpos($liens, '.net') - $positiondebut;
            $nom = substr($liens, $positiondebut + 2, $longueur - 2);
        } else {
            $nom = "bahmerdalors";
        }
        ?>
        <li><p><a target="_blank" href="<?= $liens ?>">lien <?= $nom ?></a></p></li>
    <?php }
    $tab = file("http://bienvu.net/misc/customers.csv");
    //var_dump($tab);
    ?>
</ul>
<h4><b><u>Récupération d'un fichier distant
            Un site partenaire mets à votre disposition une liste des nouveaux utilisateurs inscrits.

            Cette liste est disponible à cette adresse http://bienvu.net/misc/customers.csv.</u></b></h4>
<p>Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les colonnes du
    tableau.</p>

<div class="table-responsive">
    <table class="table table-bordered col-6 table-info table-striped table-hover">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Ville</th>
            <th>Etat</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($tab as $donnees) {
            ?>
            <tr>
                <?php
                $chaine = preg_split("#,#", $donnees);
                foreach ($chaine as $elements) {
                    ?>
                    <td><?= $elements ?></td>
                    <?php
                } ?> </tr> <?php
        }
        ?>
        </tbody>
    </table>
</div>
<?php
//include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php";
include "./view/footer.php";
?>


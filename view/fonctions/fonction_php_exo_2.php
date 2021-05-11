<?php
$titre = "les fonctions - exercice 2";
//include $_SERVER['DOCUMENT_ROOT']."/controller/fonctions/fonction_php_exo_2_controller.php";
//include $_SERVER['DOCUMENT_ROOT']."/view/header.php";
include "./controller/fonctions/fonction_php_exo_2_controller.php";
include "./view/header.php";
?>
<h1>Ecrivez une fonction qui calcul la somme des valeurs d'un tableau</h1>
<a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_05_Fonctions.html" title="Enoncé de l'exercice">Enoncé
    de l'exercice</a>

<?php $somme2 = calculSomme($tab2); ?>

<p>La somme des valeurs de ce tableau</p>

<div class="d-flex flex-row">
    <div class="table-responsive col-2">
        <table class="table table-info table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Index</th>
                <th>Valeur (pour la somme)</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($tab2 as $index => $valeur) {
                ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= $valeur ?></td>
                </tr>

            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="d-flex flex-column">
    <span>est de : <?= $somme2 ?> .</span>
    <span>La fonction utilisée : </span>
        <pre class="hljs-code"><code class="hljs xml"><p>function <span class="hljs">calculSomme</span>($tablo){</p>
        <p>$somme=<span class="hljs-number">0</span>;</p>
        <p>foreach($tablo as $clef=>$valeur){</p>
        <p>$somme+=$valeur;}</p>
        <p>return $somme;}</p>
    </code></pre>
    </div>
</div>


<?php
//include $_SERVER['DOCUMENT_ROOT']."/view/footer.php";
include "./view/footer.php";
?>

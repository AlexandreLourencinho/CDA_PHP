<?php
$titre = " Fonctions php : exercice 3";
include $_SERVER['DOCUMENT_ROOT']."/view/header.php";
include $_SERVER['DOCUMENT_ROOT']."/controller/fonctions/fonction_php_exo_3_controller.php";
?>
    <h1>Créer une fonction qui vérifie le niveau de complexité d'un mot de passe : 8 char de longueur, au moins 1
        chiffre, une majuscule, une minuscule</h1>
    <a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_05_Fonctions.html">Enoncé de l'exercice</a>

    <p>Fonction utilisée :</p>
<div class="d-flex flex-row">
    <code>
        <p> function checkMdp($mdp) {</p>
        <p>$i=0;</p>
        <p>$j=0;</p>
        <p>$k=0;</p>
        <p>$taille = strlen($mdp);</p>
        <p>$tablox = str_split($mdp);</p>
        <p>$bool = true;</p>
        <p>foreach ($tablox as $index => $lettre) {</p>
        <p>if (ctype_upper($lettre) == true and $i==0) {</p>
        <p> $i++; }</p>
        <p> if (ctype_lower($lettre) == true and $j==0) {</p>
        <p>$j++; }</p>
        <p> if (ctype_digit(($lettre)) == true and $k==0) {</p>
        <p> $k++; }</p>
        <p>}</p>
        <p> if ($i == 0 or $j == 0 or $k == 0 or $taille<8) {</p>
        <p>$bool = false; }</p>
        <p> return $bool; }</p>
    </code>
<div>
    <p>mot de passe testé ici : "louOe1ttegentllalouette". Résultat de l'utilisation de la fonction :
        <?php $result=(vraioufaux(checkMdp('louOe1ttegentlLalouette'))); ?> <?= $result ?> </p>
    <p>mot de passe testé ici : "12345". Résultat de l'utilisation de la fonction :
        <?php $result=(vraioufaux(checkMdp('12345'))); ?> <?= $result ?></p>
    <p>mot de passe testé ici : "abcdefghijk". Résultat de l'utilisation de la fonction :
        <?php $result=(vraioufaux(checkMdp('abcdefghijk'))); ?> <?= $result ?></p>
    <p>mot de passe testé ici : "MOPLDFEJHDEBN". Résultat de l'utilisation de la fonction :
    <?php $result=(vraioufaux(checkMdp('MOPLDFEJHDEBN'))); ?> <?= $result ?></p>
    <p>mot de passe testé ici : "azzrkMODIJKKLo". Résultat de l'utilisation de la fonction :
    <?php $result=(vraioufaux(checkMdp('azzrkMODIJKKLo'))); ?> <?= $result ?></p>
</div>
</div>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php";
?>
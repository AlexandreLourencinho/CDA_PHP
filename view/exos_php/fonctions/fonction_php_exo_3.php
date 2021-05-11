<?php
$titre = " Fonctions php : exercice 3";
//include $_SERVER['DOCUMENT_ROOT']."/view/header.php";
//include $_SERVER['DOCUMENT_ROOT']."/controller/fonctions/fonction_php_exo_3_controller.php";
include "./view/headers_et_footer/header.php";
include "./controller/exos_php_controllers/fonctions/fonction_php_exo_3_controller.php";
?>
    <h1>Créer une fonction qui vérifie le niveau de complexité d'un mot de passe : 8 char de longueur, au moins 1
        chiffre, une majuscule, une minuscule</h1>
    <a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_05_Fonctions.html">Enoncé de l'exercice</a>
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
    <p>Fonction utilisée :</p>
    <div>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        code
    </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
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
        </div>
        </div>
</div>
<p>pour le mot de passe : blaPPPubla :
<?= $mess; ?>,<?= $result1[1]; ?></p>
    <p>Ce code est largement optimisable je pense, mais bon il est 12h45 faut aller manger là </p>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#code2" aria-expanded="false" aria-controls="collapseExample">
        code
    </button>
    </p>
    <div class="collapse" id="code2">
        <div class="card card-body">
            <code>
                <p>function testmdp($mdp){</p>
                <p>$message="";</p>
                <p>$i=0;</p>
                <p>$j=0;</p>
                <p>$k=0;</p>
                <p>$taille = strlen($mdp);</p>
                <p>$tablox = str_split($mdp);</p>
                <p>$bool1 = true;</p>
                <p>foreach ($tablox as $lettre) {</p>
                <p>if (ctype_upper($lettre) == true and $i==0) {</p>
                <p>$i++; }</p>
                <p>if (ctype_lower($lettre) == true and $j==0) {</p>
                <p>$j++; }</p>
                <p>if (ctype_digit(($lettre)) == true and $k==0) {</p>
                <p>$k++; }</p>
                <p>}</p>
                <p>if ($i == 0 or $j == 0 or $k == 0) {</p>
                <p>$message="Il vous faut une majuscule, une minuscule, et un chiffre, au minimum";</p>
                <p>$bool1 = false; }</p>
                <p>else if ($taille<8) {</p>
                <p>$bool1=false;</p>
                <p>$message = "Votre mot de passe doit faire a minima 8 caractères de longueur."; }</p>
                <p>return array(1=>$message,2=>$bool1); }</p>
                <p>function vraioufaux2($argg) {</p>
                <p>if ($argg[2] === false) {</p>
                <p>$v = "faux";</p>
                <p>} else {</p>
                <p> $v = "vrai"; }</p>
                <p>return $v; }</p>
                <p>$result1 = testmdp("blaPPPubla");</p>
                <p>$mess = vraioufaux2($result1);</p>
            </code>
        </div>
    </div>



<?php
//include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php";
include "./view/headers_et_footer/footer.php";
?>
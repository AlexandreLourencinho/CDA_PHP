<?php
$titre = "exo telechargement fichiers php";
//include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php";
//include $_SERVER['DOCUMENT_ROOT'] . "/controller/telechargement_fichier_php/exo_telechargement_fichier_php_controller.php";
include "./view/headers_et_footer/header.php";;
include "./controller/exos_php_controllers/telechargement_fichier_php/exo_telechargement_fichier_php_controller.php";
?>


<form action="/view/telechargement_fichier_php/telechargement_fichier_php_script.php" method="post" enctype="multipart/form-data">



    <input type="file" name="fichier">
    <button type="submit" name="envoi">Envoi</button>
</form>























<?php
//include $_SERVER['DOCUMENT_ROOT']."/view/footer.php";
include "./view/headers_et_footer/footer.php";
?>
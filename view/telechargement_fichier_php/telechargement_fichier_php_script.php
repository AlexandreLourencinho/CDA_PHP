<?php
$titre = "manip fichiers - exo 1";
//include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php";
//include $_SERVER['DOCUMENT_ROOT']."/controller/telechargement_fichier_php/exo_telechargement_fichier_php_controller.php";
include "./view/header.php";
include "./controller/telechargement_fichier_php/exo_telechargement_fichier_php_controller.php";
if(isset($_POST['envoi'])) {

    var_dump($_FILES);
}
// On met les types autorisés dans un tableau (ici pour une image)
$tableTypesMimes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

// On extrait le type du fichier via l'extension FILE_INFO
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$typeMime = finfo_file($finfo, $_FILES["fichier"]["tmp_name"]);
finfo_close($finfo);

if (in_array($typeMime, $tableTypesMimes))
{
    /* Le type est parmi ceux autorisés, donc OK, on va pouvoir
       déplacer et renommer le fichier */
    move_uploaded_file($_FILES["fichier"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/view/assets/images/".$_FILES['fichier']['name'].".jpg");
    chmod($_SERVER['DOCUMENT_ROOT']."/view/assets/images/".$_FILES['fichier']['name'].".jpg",0444);
}
else
{
    // Le type n'est pas autorisé, donc ERREUR

    echo "Type de fichier non autorisé";
    exit;
}
?>



























<?php
//include $_SERVER['DOCUMENT_ROOT']."/view/footer.php";
include "./view/footer.php";
?>


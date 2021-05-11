<?php
$titre="details disques";
include "./view/headers_et_footer/header3.php";
include "./model/eval_php_model/connexion_db/connexions_bases_de_donnees.php";
include "./model/eval_php_model/requete/eval_php_requete.php";
$stmt = $db->prepare("SELECT * FROM `disc` where disc_id=?");
$stmt->execute(array($_GET['disc_id']));
$disc=$stmt->fetch(PDO::FETCH_OBJ);
?>
<p>Disque numéro : <?= $disc->disc_id ?></p>
<p><?= $disc->disc_title ?></p>
<p><?= $disc->disc_label ?></p>




















<?php
include "./view/headers_et_footer/footer.php";
?>
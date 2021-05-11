<?php
include "./model/eval_php_model/connexion_db/connexions_bases_de_donnees.php";
$requete =$db->query("SELECT * FROM `artist`");
$tableauArtistes = $requete->fetchAll(PDO::FETCH_OBJ);

$requete2 = $db->query("SELECT * FROM `disc`");
$tableaudisques = $requete2->fetchAll(PDO::FETCH_OBJ);
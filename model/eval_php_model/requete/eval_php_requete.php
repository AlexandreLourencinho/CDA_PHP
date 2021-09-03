<?php
include "./model/eval_php_model/connexion_db/connexions_bases_de_donnees.php";
$requete =$db->query("SELECT * FROM `artist`");
$tableauArtistes = $requete->fetchAll(PDO::FETCH_OBJ);
var_dump($tableauArtistes);
$requete2 = $db->query("SELECT * FROM `disc`");
$tableaudisques = $requete2->fetchAll(PDO::FETCH_OBJ);
var_dump($tableaudisques);

//-----------------------------------
// $requete = $base de donnée -> query : execute la requete
// $tableau = $requete->fetchAll() prend ce qu'il y a dans $requete et le met dans un tableau  (stocké ici dans $tableau)
//PDO::FETCH_OBJ  dans fetchAll() (donc fetchAll(PDO::FETCH_OBJ)) permet de spécifier le contenu du tableau: ici ,des objets
// stdClass, qui est la classe des éléments convertis en objets
//----------------------------------
//$requete = $base de donnée->prepare() prépare une requête SQL avec des paramètres sous la forme de :param
// exemple : $requete = $db->query(SELECT * FROM TABLE WHERE ID=:id)
// ensuite il faut bindparam ou bindvalue les paramètres avec des variables, récupérées par exemple depuis un formulaire
// exemple : l'id $_POST[id] a été récupéré par un formulaire et stocké dans $id
// donne : $requete->bindParam(:id(paramètre),$id(la variable avec l'id stocké))
// note : bindValue prend les types de paramètre attendu : $requete->bindValue(:id,$id,PDO::PARAM_INT) pour un entier
// execution de la requete : $requete->execute(), arrive au moment du ->query dans l'exemple du dessus)
// stoçckage dans un tableau, comme au dessus :
// $tableau = $requete->fetchAll(PDO::FETCH_OBJ) sous forme d'objet.
// note : demander la diff avec FETCH_both/num/assoc/column/unique/key_pair/into... etc
// https://phpdelusions.net/pdo/fetch_modes
//--------------------------------------------
// le $requete->execute() peut aussi s'utiliser comme suit :
// même requete qu'au dessus avec l'ID; $requete->execute(array(':id'=>$id) OU $requete->execute(array($id))
// si requete = SELECT * FROM TABLE WHERE ID=:id AND name=:name
// $requete->execute(array(':id'=>$id, ':name"=>$name) OU $requete->execute(array($id,$name))
//encore d'autres syntaxes mais ça ira hein non mais oh,j'vais pas apprendre php.net par coeur non plus



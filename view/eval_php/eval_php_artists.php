<?php
$titre = "Affichage artistes";
include "./view/headers_et_footer/header3.php";
include "./model/eval_php_model/requete/eval_php_requete.php";
?>


<?php foreach ($tableauArtistes as $nomArtistes){
   var_dump($nomArtistes); ?>
<p><?= $nomArtistes->artist_name ?></p>
<!--    forme d'objet, donc pas $nomArtistes[artist_name] mais $nomArtistes->artist_name-->
<?php
}
    ?>

<?php
foreach ($tableaudisques as $disques) {
    var_dump($disques);
    ?>
    <p><span><a target="_blank" href="/view/eval_php/eval_php_details_disques.php?disc_id=<?= $disques->disc_id; ?>"><?= $disques->disc_id ?></a></span>
    <span> <?= $disques->disc_genre ?></span>
        <span><?= $disques->disc_price ?></span>
    </p>

<?php
}

?>

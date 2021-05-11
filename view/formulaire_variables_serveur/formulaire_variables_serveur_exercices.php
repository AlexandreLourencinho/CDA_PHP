<?php
$titre = "Les formulaires et les variables serveur";
//include $_SERVER['DOCUMENT_ROOT']."/view/header.php";
include "./view/header.php";
//include $_SERVER['DOCUMENT_ROOT']."/controller/formulaire_variables_serveur/formulaire_variables_serveur_exercices_controller.php";
include "./controller/formulaire_variables_serveur/formulaire_variables_serveur_exercices_controller.php";
?>
<h1><u><b>Les formulaires et les variables serveur</b></u></h1>
<p>Exercice : Reprenez le formulaire que vous avez réalisé dans la séance précédente (JavaScript). Dans ce formulaire, vous devez modifier l'attribut action de la balise form pour indiquer l'adresse d'un script PHP. Puis créer un script PHP permettant d'afficher l'ensemble des valeurs transmises.</p>
<a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_Formulaires.html" title="énoncé de l'exercice">Enoncé de l'exercice</a>

<?php

//htmlspecialchars() ou htmlentities() : shutdown les caractères spéciaux html niveau interpretation.
// recup les value pouir pas tout reremplir : value="<?= isset($_POST['champ']) ? $_POST['champ] : '' ? > "
//echo $_SERVER['PHP_SELF'];
if(isset($_POST['envoi'])){
    var_dump($_POST);
    ?>
<p>Bonjour <?= $_POST['nom']." ,".$_POST['prenom'] ?>. Le sujet de votre message est :" <?= $_POST['sujet'] ?> ", votre
email est le : <?= $_POST['mail'] ?> et votre message est le suivant : <?= $_POST['message'] ?> . </p>
<?php
}
else{
?>
<!--formulaire-->
<form class="formulaire" id="formulaire" method="post" action="<?= $_SERVER['PHP_SELF']?>">
    <div class="form-group">
    <!--    input pour le nom avec sa balsie d'erreur prête-->
    <label for="nom" class="testneon2">Votre nom : *</label>
    <input type="text" placeholder="Votre nom ici" id="nom" class="form-control col-4" name="nom">
    <div id="errNom" class="col-4"></div>
    <!--    input pour le prénom, même principe-->
    <label for="prenom" class="testneon2">Votre prénom : *</label>
    <input type="text" placeholder="Votre prénom ici" id="prenom" class="form-control col-4" name="prenom">
    <div id="errPrenom" class="col-4"></div>
    <!--    input pour le sujet -->
    <label for="sujet" class="testneon2">Le sujet de votre message * :</label>
    <input type="text" id="sujet" placeholder="sujet de votre message" class="form-control col-4" name="sujet">
    <div id="errSujet" class="col-4"></div>
    <!--    input pour le mail -->
    <label for="mail" class="testneon2"> Votre email * :</label>
    <input type="text" placeholder="votre email" id="mail" class="form-control col-4" name="mail">
    <div id="errMail" class="col-4"></div>
    <!--    input pour le message -->
    <label for="message" class="testneon2">Votre message : *</label>
    <textarea placeholder="votre message ici" id="message" class="form-control col-4" name="message" rows="5"
              cols="33"></textarea>
    <div id="errMessage" class="col-4"></div>
    <!--    boutons envoyer et annuler / réini formulaire -->
    <button type="submit" class="btn btn-success envoi" id="formulairecontact" name="envoi">envoyer !</button>
    <button type="reset" class="btn btn-danger envoi" id="formulaireset">Réinitialiser le formulaire</button>
    <button type="button" class="btn btn-info envoi" id="retour">Retour</button>
    </div>
</form>






















<?php
}
include $_SERVER['DOCUMENT_ROOT']."/view/footer.php";
?>

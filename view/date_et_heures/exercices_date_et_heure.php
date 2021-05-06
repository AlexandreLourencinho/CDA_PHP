<?php
$titre = "date et heures - exercices";
include $_SERVER['DOCUMENT_ROOT'] . "/controller/date_et_heures/exercices_date_et_heure_controller.php";
include $_SERVER['DOCUMENT_ROOT'] . "/view/header.php";
?>
    <a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_06_Dates.html" title="Enoncé de l'exercice"
       class="h2">Enoncé de l'exercice</a>
    <div class="container align-items-center col-10">

        <p class="h1"><u>Trouvez le numéro de semaine de la date suivante : 14/07/2019.</u></p>
        <p>Le numéro de la semaine du 14/07/2019 est le <?= $numSemaine ?></p>
        <code>
            <p>$date1=new DateTime("14-07-2019");</p>
            <p>$date2 = $date1->format('W');</p>
        </code>
        <hr>
        <p class="h1"><u>Combien reste-t-il de jours avant la fin de votre formation?</u></p>
        <p>En prenant pour date de fin de la formation le 10 décembre 2021 (nous passons notre titre professionnel la
            semaine du 6/12 au 10/12),</p>
        <p>il reste <u><b><?= $nbJours ?></b></u> jours avant la fin de la formation.</p>
        <p>Code :</p>
        <code>
            <p>$datefin = new DateTime("10-12-2021");</p>
            <p>$dateActuelle = date_create("now");</p>
            <p>$nbJours = intval(($dateActuelle->diff($datefin))->format('%a'));</p>
        </code>
        <hr>
        <p class="h1"><u><b>Comment déterminer si une année est bissextile ?</b></u></p>
        <p> L'année 2010
            <?php
            if ($result == true)
            {
            ?>
            est une année bissextile</p>
        <?php }
        else {
            ?>
            n'est pas une année bissextile</p>

            <?php
        } ?>

        <code>
            <p> function bisext($annee){</p>
            <p>if(date("m", strtotime("$annee-02-29"))==03){</p>
            <p>return false; }</p>
            <p>else{</p>
            <p>return true; } }</p></code>
        appel de la fonction :
        <code>
            <p>$result=bisext("2010");</p>
        </code>
<hr>
        <p class="h1"><u><b>Montrez que la date du 32/17/2019 est erronée.</b></u></p>
        <code>
            <p>function dateValide($date){</p>
            <p>DateTime::createFromFormat("d/m/Y", $date);</p>
            <p>$errors = DateTime::getLastErrors();</p>
            <p>if(sizeof($errors['warnings'])!=0) {</p>
            <p>$retour = "la date n'est pas valide"; }</p>
            <p>else {</p>
            <p>$retour = "la date est valide"; }</p>
            <p>return $retour; }</p>
        </code>
        <p>Appel de la fonction : </p>
        <code>$message = datevalide("32/17/2019");</code>
        <p> Résultat : <?= $message ?></p>
        <p>Autre appel de la fonction, avec une date correcte : </p>
        <code>$message2=dateValide("31/12/2019");</code>
        <p>Résultat : <?= $message2 ?></p>
<hr>
        <p class="h1"><u><b>Affichez l'heure courante sous cette forme : 11h25.</b></u></p>
<code>
    <p>$timestamp1=time();</p>
    <p>$datoj2 = date("G\hi", $timestamp1);</p>
</code>
        <p> L'heure actuelle :  <?= $datoj2 ?></p>
    </div>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php";
?>
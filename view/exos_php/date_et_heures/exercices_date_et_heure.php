<?php
$titre = "date et heures - exercices";
//include $_SERVER['DOCUMENT_ROOT']."/controller/date_et_heures/exercices_date_et_heure_controller.php";
//include $_SERVER['DOCUMENT_ROOT']."/view/header.php";
include "./controller/exos_php_controllers/date_et_heures/exercices_date_et_heure_controller.php";
include "./view/headers_et_footer/header.php";
?>

    <div class="container align-items-center col-10">
        <a href="https://ncode.amorce.org/ressources/Pool/CDA/WEB_PHP_frc/PHP_06_Dates.html"
           title="Enoncé de l'exercice"
           class="h2">Enoncé de l'exercice</a>
        <p class="h1"><u>Trouvez le numéro de semaine de la date suivante : 14/07/2019.</u></p>
        <p>Le numéro de la semaine du 14/07/2019 est le <?= $numSemaine ?></p>
        <p>
            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#codenumsemaine"
                    aria-expanded="false" aria-controls="collapseExample">
                Code
            </button>
        </p>
        <div class="collapse" id="codenumsemaine">
            <div class="card card-body">
                <code>
                    <p>$date1=new DateTime("14-07-2019");</p>
                    <p>$numSemaine = $date1->format('W');</p>
                </code>
            </div>
        </div>
        <hr>
        <p class="h1"><u>Combien reste-t-il de jours avant la fin de votre formation?</u></p>
        <p>En prenant pour date de fin de la formation le 10 décembre 2021 (nous passons notre titre professionnel la
            semaine du 6/12 au 10/12),</p>
        <p>il reste <u><b><?= $nbJours->days ?></b></u> jours avant la fin de la formation.</p>
        <p>
            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#codefinformation"
                    aria-expanded="false" aria-controls="collapseExample">
                Code
            </button>
        </p>
        <div class="collapse" id="codefinformation">
            <div class="card card-body">
                <code>
                    <p> $datefin = new DateTime("10-12-2021");</p>
                    <p>$dateActuelle = new DateTime();</p>
                    <p>$nbJours = ($dateActuelle->diff($datefin));</p>
                </code>
            </div>
        </div>

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
        <p>
            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#codeanneebissextile"
                    aria-expanded="false" aria-controls="collapseExample">
                Code
            </button>
        </p>
        <div class="collapse" id="codeanneebissextile">
            <div class="card card-body">
                <code>
                    <p>function bisext($annee){</p>
                    <p>if(date("m", strtotime("$annee-02-29"))==03){</p>
                    <p>return false; }</p>
                    <p>else{</p>
                    <p>return true; }</p>
                    <p>}</p>
                </code>
            </div>
        </div>

        appel de la fonction :
        <code>
            <p>$result=bisext("2010");</p>
        </code>
        <hr>
        <p class="h1"><u><b>Montrez que la date du 32/17/2019 est erronée.</b></u></p>
        <p>
            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#codedatevalide"
                    aria-expanded="false" aria-controls="collapseExample">
                Code
            </button>
        </p>
        <div class="collapse" id="codedatevalide">
            <div class="card card-body">
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
            </div>
        </div>
         <p>Appels de la fonction : </p>
        <p>
            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#codeappels"
                    aria-expanded="false" aria-controls="collapseExample">
                Code
            </button>
        </p>
        <div class="collapse" id="codeappels">
            <div class="card card-body">
                <code>$message = datevalide("32/17/2019");</code>
                <p> Résultat : <?= $message ?></p>
                <p>avec une date correcte : </p>
                <code>$message2=dateValide("31/12/2019");</code>
                <p>Résultat : <?= $message2 ?></p>
            </div>
        </div>

        <hr>
        <p class="h1"><u><b>Affichez l'heure courante sous cette forme : 11h25.</b></u></p>
        <code>
            <p>$timestamp1=time();</p>
            <p>$datoj2 = date("G\hi", $timestamp1);</p>
        </code>
        <p> L'heure actuelle : <?= $datoj2 ?></p>

        <hr>
        <h1><u><b>Ajoutez 1 mois à la date courante.</b></u></h1>
        <p> La date du jour + 1 mois est : <?= $dateaff2 ?></p>
        <p>
            <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#codeplusunmois"
                    aria-expanded="false" aria-controls="collapseExample">
                Code
            </button>
        </p>
        <div class="collapse" id="codeplusunmois">
            <div class="card card-body">
                <code>
                    <p>$dateplus = new DateTime();</p>
                    <p>$dateplus->modify('+1 month');
                    <p>$dateaff=date_format($dateplus,'d-m-Y');</p>
                </code>
            </div>
        </div>
        <hr>
        <h1><u><b>Que s'est-il passé le 1000200000 ?</b></u></h1>
        <p>le <?= $evenement ?> fut le <a
                    href="https://fr.wikipedia.org/wiki/Pi%C3%A9mont#De_l'occupation_fran%C3%A7aise_%C3%A0_l'unification_de_l'Italie_(1796-1861)"
                    title="évènement du 11 septembre 2001">199ème anniversaire de l'annexion du Piémont à la France par
                Napoléon Bonaparte</a></p>
        <code>
            <p>$evenement = date("d-m-Y",1000200000);</p>
        </code>
    </div>

<?php
//include $_SERVER['DOCUMENT_ROOT']."/view/footer.php";
include "./view/headers_et_footer/footer.php";
?>
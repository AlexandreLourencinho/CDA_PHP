<?php
date_default_timezone_set("Europe/Paris");

// numéro de la semaine ($numSemaine)
$date1 = new DateTime("14-07-2019");
$numSemaine = $date1->format('W');
//------------------------------
//recup date fin
$datefin = new DateTime("10-12-2021");
// recup^date aujourd'hui
$dateActuelle = new DateTime();
//nbjr avant fin formation
$nbJours = ($dateActuelle->diff($datefin));

//année bissextile
function bisext($annee){
    if(date("m", strtotime("$annee-02-29"))==03){
        return false;
    }
    else{
        return true;
    }
}
$result=bisext("2010");

// methode 2
$datetoday = new Datetime();
$anneo=$datetoday->format('L');//(renvoi 0 si pas bisex et 1 si bisex)

//-------
//date valide ou pas
function dateValide($date)
{
    DateTime::createFromFormat("d/m/Y", $date);
    $errors = DateTime::getLastErrors();
        if(sizeof($errors['warnings'])!=0) {
            $retour = "la date n'est pas valide";
        }
        else
        {
            $retour = "la date est valide";
        }

    return $retour;
}
$message = dateValide("32/17/2019");
$message2 = dateValide("31/12/2019");


// afficher 11h25
$timestamp1=time();
//$datoj2 = date("G\hi", $timestamp1);
$datoj2 = $datetoday->format("H\hi");

//ajouter 1 mois a la date du jour
$dateplus = new DateTime();
//$dateplus->modify('+1 month');
$dateaff=$dateplus->add(new DateInterval('P1M'));
$dateaff2 = $dateaff->format("d-m-Y");

// la date en timestamp
//$evenement = date("d-m-Y",1000200000);


$event = new DateTime();
$piemont=$event->setTimestamp(1000200000);
$evenement=$piemont->format("d-m-Y");
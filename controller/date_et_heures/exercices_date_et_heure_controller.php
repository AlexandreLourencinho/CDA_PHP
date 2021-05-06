<?php
date_default_timezone_set("Europe/Paris");

// numéro de la semaine ($numSemaine)
$date1=new DateTime("14-07-2019");
$numSemaine = $date1->format('W');
//------------------------------
//recup date fin
$datefin = new DateTime("10-12-2021");
// recup^date aujourd'hui
$dateActuelle = date_create("now");
//nbjr avant fin formation
$nbJours = intval(($dateActuelle->diff($datefin))->format('%a'));

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
$message2=dateValide("31/12/2019");


// afficher 11h25
$timestamp1=time();
$datoj2 = date("G\hi", $timestamp1);

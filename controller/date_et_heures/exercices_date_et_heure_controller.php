<?php
date_default_timezone_set("Europe/Paris");
$date1=new DateTime("14-07-2019");
$date2 = $date1->format('W');


//6 au 10 /12
$datefin = new DateTime("10-12-2021");
$datoj = date_create("now");

$nbjours = $datoj->diff($datefin);
$nbjour=intval($nbjours->format('%a'));
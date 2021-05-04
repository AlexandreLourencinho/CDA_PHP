<?php
$tab = array(4, 3, 8, 2);


function calculSomme($tablo){
    $somme=0;
    foreach($tablo as $clef=>$valeur){
        $somme+=$valeur;
    }
    return $somme;
}
$tab2 = array(1,2,3,4,5,6,7,8,9,8,7,6,5,4,3,2,1);

?>
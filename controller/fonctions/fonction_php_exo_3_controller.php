<?php
$bool = true;
$vrai=0 ;
function checkMdp($mdp)
{
    $i=0;
    $j=0;
    $k=0;
    $taille = strlen($mdp);
    $tablox = str_split($mdp);
    $bool = true;
    foreach ($tablox as $index => $lettre) {
        if (ctype_upper($lettre) == true and $i==0) {
            $i++;
        }
        if (ctype_lower($lettre) == true and $j==0) {
            $j++;
        }
        if (ctype_digit(($lettre)) == true and $k==0) {
            $k++;
        }
    }
    if ($i == 0 or $j == 0 or $k == 0 or $taille<8) {
        $bool = false;
    }
    return $bool;
}
function vraioufaux($arg){
    if($arg==false){
        $vrai="false";
    }
    else{
        $vrai="true";
    }
    return $vrai;
}
?>